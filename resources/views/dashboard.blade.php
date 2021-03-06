<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. {{ Auth::user()->name}}

            <b class="float-right">Total Users: {{ count($users) }}
            </b>
        </h2>
    </x-slot>

      
    <div class="container" style="margin-top: 60px">
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Registered On</th>
                  </tr>
                </thead>
                <tbody>
                    @php ($i = 1)
                    @foreach ( $users as $user)
                        
                    
                  <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</x-app-layout>
