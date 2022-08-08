@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        TEST











                        <!-- example 1 -->
                        {{-- <ul x-data="{
                            colors: [
                                { id: 1, label: 'Red' },
                                { id: 2, label: 'Orange' },
                                { id: 3, label: 'Yellow' },
                            ]
                        }">
                            <template x-for="color in colors" :key="color.id">
                                <li x-text="color.label"></li>
                            </template>
                        </ul> --}}


                        <!-- example 2 -->
                        {{-- <ul x-data="{
                            users: [{
                                    'userId': 1,
                                    'id': 1,
                                    'name': 'mohammed',
                                    'jop': 'backenddeveloper'
                                },

                                {
                                    'userId': 2,
                                    'id': 2,
                                    'name': 'omar',
                                    'jop': 'frontenddeveloper'
                                },

                                {
                                    'userId': 5,
                                    'id': 3,
                                    'name': 'ahmead',
                                    'jop': 'markiting'
                                },
                            ]
                        }">
                            <template x-for="user in users" :key="user.id">
                                <p x-text="user.jop"></p>
                            </template>

                            <template x-for="user in users" :key="user.id">
                                <li x-text="user.name"></li>
                            </template>
                        </ul> --}}

                        <!-- example 3 -->
                        {{-- <div x-data="{
                            data: [],
                            async fetchData() {
                                fetch('https://jsonplaceholder.typicode.com/todos?_start=0&_limit=5')
                                    .then(response => response.json())
                                    .then(data => this.data = data);
                            }
                        }" x-init="fetchData">
                            <ul>
                                <template x-for="item in data" :key="item.id">
                                    <li x-text="item.title"></li>
                                </template>
                            </ul>
                        </div> --}}



                        <!-- example 4 -->
                        <!-- http://127.0.0.1:8000/api/search/users?q=m -->
                        {{-- fetch(`/api/search/users?q=${e.target.value}&excludedUser={{ auth()->id() }}`) --}}

















                        <!--<i class="bi bi-mic"></i>Mic
            <i class="bi bi-mic-fill"></i>Mic fill
            <i class="bi bi-mic-mute-fill"></i>Mic mute fill
            <i class="bi bi-pause-circle"></i>Pause circle
        <i class="fa-solid fa-trash"></i>trash
        -->






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



