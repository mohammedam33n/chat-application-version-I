<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Conversation;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    public function show(User $user, Conversation $conversation)
    {
        return $user->inConversation($conversation->id);
    }
}
