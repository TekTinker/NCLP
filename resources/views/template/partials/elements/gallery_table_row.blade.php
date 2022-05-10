<li>
    <a href="" data-rel="colorbox" class="cboxElement">
        <img alt="150x150" src="{{ $gallery->photo }}" width="200" height="200">
        <div class="text">
            <div class="inner"></div>
        </div>
    </a>

    <div class="tools tools-bottom">

        <a href="">

        </a>
    </div>

    <div class="tools tools-bottom">

        <form class="inline" method="POST" action="{{ route('gallery.delete', ['id' => $gallery->id]) }}">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-xs btn-danger">
                <i class="ace-icon fa fa-times"></i>
                &nbsp;
                Delete

            </button>
        </form>


    </div>
</li>