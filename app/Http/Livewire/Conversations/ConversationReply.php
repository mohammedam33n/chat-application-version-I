<?php

namespace App\Http\Livewire\Conversations;

use App\Events\Conversations\ConversationUpdated;
use Livewire\Component;
use App\Models\Conversation;
use Livewire\WithFileUploads;
use App\Events\Conversations\MessageAdded;


class ConversationReply extends Component
{
    use WithFileUploads;

    public $body = null;
    public $attachment = null;
    public $attachment_name = null;
    public $conversation;

    public function mount(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }

    protected $rules = [
        'body' => 'required',
        'attachment' => 'nullable|file|mimes:png,jpg,jpeg,gif,wav,mp3,mp4|max:102400',
    ];

    public function reply()
    {
        $this->validate();

        if (!is_null($this->attachment)) {
            $this->attachment_name = md5($this->attachment . microtime()) . '.' . $this->attachment->extension();
            $this->attachment->storeAs('/', $this->attachment_name, 'media');
            $data['attachment'] = $this->attachment_name;
        }

        $data['body'] = $this->body;
        $data['user_id'] = auth()->id();

        $message = $this->conversation->messages()->create($data);
        $this->conversation->update([
            'last_message_at' => now(),
        ]);

        foreach ($this->conversation->others as $user) {
            $user->conversations()->updateExistingPivot($this->conversation, [
                'read_at' => null
            ]);
        }


        broadcast(new MessageAdded($message))->toOthers();
        broadcast(new ConversationUpdated($message->conversation));
        $this->emit('message.created', $message->id);

        $this->body = null;
        $this->attachment = null;
        $this->attachment_name = null;
    }

    public function render()
    {
        return view('livewire.conversations.conversation-reply');
    }
}



