@extends('layouts.site')

@section('content')
    <!-- PROJECT SHOW -->
    <!-- HEADER -->
    <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center">{{$project->title}}</h1>
    <h2 class="mt-2 px-10 text-base font-normal text-twill-grey text-center">{{$project->headline}}</h2>

    <!-- COVER -->
    <div class="my-32 mx-12 py-32 px-12 bg-twill-grey-2">
        <img class="w-10/12 lg:w-3/4 mx-auto" src="{{ $project->image('screengrab', 'desktop',['w'=>900, 'fit'=>null]) }}" alt="{{$project->title}}" />
    </div>

    <!-- CONTENT -->
    <div class="pb-16 lg:pb-40 border-b">

        <!-- PROJECT INFO -->
        <div class="w-10/12 lg:w-1/2 mt-32 mx-auto text-twill-grey-3">
            <div class="flex">
                <div class="w-1/2">
                    <ul>
                        <li>Website: <a href="{{$project->url}}" class="text-twill-purple">{{$project->domain}}</a></li>
                        <li>Released: TBD</li>
                    </ul>
                </div>
                <div class="w-1/2">
                    <ul>
                        <li>Frontend: TBD</li>
                        <li>Frontend: TBD</li>
                        <li>Frontend: TBD</li>
                        <li>Frontend: TBD</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- HTML CONTENT -->
        <div class="w-10/12 lg:w-1/2 mt-32 mx-auto text-twill-grey-3">
               {!! $project->description_tailwind !!}
        </div>


    </div>


@endsection




