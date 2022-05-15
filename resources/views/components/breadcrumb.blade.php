@if (isset($breadcrumbs) && count($breadcrumbs))
    <div class="container mx-auto">
        <div class="p-4 rounded flex flex-wrap bg-gray-100 text-sm text-gray-800">
            @foreach ($breadcrumbs as $breadcrumb)

                @if (isset($breadcrumb['url']) && $breadcrumb['url'])
                    <div>
                        <a href="{{ $breadcrumb['url'] }}" class="text-green-500 hover:text-blue-500 hover:underline focus:text-blue-900 focus:underline">
                            {{ $breadcrumb['name'] }}
                        </a>
                    </div>
                @else
                    <div>
                        {{ $breadcrumb['name'] }}
                    </div>
                @endif

                @unless($loop->last)
                    <div class="text-gray-500 px-2">
                        &nbsp;{{ $breadcrumb['sep'] }}&nbsp;
                    </div>
                @endif

            @endforeach
        </div>
    </div>
@endif