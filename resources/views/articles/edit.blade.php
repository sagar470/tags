
@extends('layout')

@section('head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')


    <div id="wrapper">
        <div id="page" class="container">

            <h1> update article</h1>

            <form method="POST" action="/articles/{{$article->id}}">

                @csrf
                @method("PUT")

                <div class="field">
                    <label class="label" for="title"></label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{$article->title}}">


                    </div>

                </div>

                <div class="field">
                    <label class="label" for="excerpt"></label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>


                    </div>
                </div>


                <div class="field">
                    <label class="label" for="body"></label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                    </div>
                </div>


                <div class="field is-grouped">

                    <div class="control">
                        <button class="button is-link" type="submit">submit</button>
                    </div>



            </form>

        </div>
    </div>


@endsection

