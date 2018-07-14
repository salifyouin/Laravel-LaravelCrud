@include('inc.header')
<div class="container spacer">
    <p class="row">
        <legende>Detail de l'article</legende>
        <p class="lead">{{$articles->title}}</p>
        <p>{{$articles->description}}</p>
    </div>
</div>
@include('inc.footer')