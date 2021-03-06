@unless ($breadcrumbs->isEmpty())

    <ol class="breadcrumb pull-right">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>
    
    <!-- begin page-header -->
    <h1 class="page-header">@yield('title')</h1>
    <!-- end page-header -->
@endunless