@extends('twill::layouts.form')

@section('contentFields')
{{--'name', 'email', 'twitter', 'portfolio_link', 'linkedin'--}}

    @formField('tags')
        <span class="input__note f--small">What are your different skill sets?</span>


    @formField('files', [
    'name' => 'resume',
    'label' => 'Resume',
    'note' => 'File shouldbe a PDF.'
    ])

    @formField('medias', [
    'name' => 'avatar',
    'label' => 'Avatar',
    'note' => 'A photo of you.'
    ])

    @formField('input', [
    'name' => 'email',
    'label' => 'Contact Email',
    'maxlength' => 200
    ])

    @formField('input', [
    'name' => 'twitter',
    'label' => 'Twitter',
    'placeholder' => '@twill4eva',
    'maxlength' => 200
    ])

    @formField('input', [
    'name' => 'portfolio_link',
    'note' => 'GitHub, Dribble, CodePen, etc.',
    'placeholder' => 'http://behance.com/sbass',
    'label' => 'Portfolio URL',
    'maxlength' => 200
    ])

    @formField('input', [
    'name' => 'linkedin',
    'label' => 'LinkedIn',
    'placeholder' => 'https://likedin.com/sbass',
    'maxlength' => 200
    ])

    @formField('block_editor', [
    'name' => 'background',
    'label' => 'Past Projects',
    'blocks' => ['quote', 'image', 'paragraph', 'project_detail']
    ])
@stop
