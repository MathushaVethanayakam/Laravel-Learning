@extends('layout')
@section('title','MyLaravelPractice')
@section('main-content')
    <div class ='row text-center' style="padding:150px; margin-left:50px;">
        <h1>{{$heading}}</h1>
        <p><?php 
            /*if($no_of_users == 0) 
                echo "$no_of_users";
            elseif($no_of_users==1)
                echo "$no_of_users";
            else
                echo "wrong";
            */
        ?></p>
        <p>
            @if($no_of_users==0)
                No User
            @elseif($no_of_users==1)
                one user
            @else
                we have many users
            @endif

        </p>
        <p>
            @unless($is_user_online)
                User offline
            @endunless    
        </p>
        <p>
            @isset($settings)
                {{$settings}}
            @endisset
            <br>
            @for($i=1; $i<=5; $i++)
                The number is {{$i}}
                <br>
            @endfor 
            <br>

            @foreach($authors as $author)
                {{$author}} <br>
            @endforeach    
            
            <br>

            @while($author = array_pop($authors))
                <p>{{$author}}</p>
            @endwhile

        </p>

    </div> 

@endsection  



