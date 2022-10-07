<div class="card mb-2">
    @if($tweet->isRetweet)
        {{$tweet->user->name}} retweeted</b>
    @endif
    <div class="card-content">
        <a href="/user/{{$tweet->user->username}}">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                </div>
                    <div class="media-content">
                        <p class="title is-4">{{$tweet->user->name}}</p>
                        <p class="subtitle is-6">{{ '@' . $tweet->user->username }}</p>
                    </div>
            </div>
        </a>
        <div class="content">
            {{$tweet->content}}
            <a href="#">#css</a> <a href="#">#responsive</a>
            <br>
            <time datetime="2016-1-1">{{$tweet->created_at->diffForHumans()}}</time>
        </div>

</div>
    <footer class="card-footer">
        @unless(isset($reply) && $reply === false)
            <a href="/tweet/{{$tweet->id}}" class="card-footer-item">Reply {{$tweet->replies()->count()}}</a>
        @endunless
        <a href="/tweet/{{$tweet->id}}/like" class="card-footer-item">Like {{$tweet->likes()->count()}}</a>
        <a href="/tweet/{{$tweet->id}}/retweet" class="card-footer-item">Retweet</a>
    </footer>
</div>
