<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>
        Blog to solve your problems in coding in <em>full stack development</em> using php, 
        php frameworks like Laravel or other languages like python, ruby, c# and etc.
    </p>
    </div>

    <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        @foreach ($archives as $stats)
            <li>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    {{ date('F', mktime(0, 0, 0, $stats['month'], 10)).' '.$stats['year'] }}
                </a>
            </li>
        @endforeach
    </ol>
    </div>

    <div class="sidebar-module">
    <h4>Tags</h4>
    <ol class="list-unstyled">
        @foreach ($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag }}">
                    {{ $tag }}
                </a>
            </li>
        @endforeach
    </ol>
    </div>

    <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
        <li><a href="https://github.com/sudhir512kj">GitHub</a></li>
        <li><a href="https://twitter.com/sudhir5125">Twitter</a></li>
    </ol>
    </div>
</div><!-- /.blog-sidebar -->