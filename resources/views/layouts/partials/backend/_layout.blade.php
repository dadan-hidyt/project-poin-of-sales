<!--begin::Main-->

@include('layouts.partials.backend._header-mobile')
<div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        @include('layouts.partials.backend._aside')
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

            @include('layouts.partials.backend._header')

            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <!-- entry -->
                <div class="d-flex flex-column-fluid">
                    <div class="container-fluid">
                        @hasSection('main')
                            @yield('main')
                        @endif
                    </div>
                </div>
                <!-- end antry -->
            </div>

            <!--end::Content-->

            @include('layouts.partials.backend._footer')
        </div>

        <!--end::Wrapper-->
    </div>

    <!--end::Page-->
</div>

<!--end::Main-->
