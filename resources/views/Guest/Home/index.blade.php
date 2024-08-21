<x-Guest.Layout.Layout title="الرئيسية">

    @push('style')
        <link rel="stylesheet" href="{{asset('assets/css/guest/home/home.css')}}">
    @endpush
    {{-- home content  here  --}}



    @push('script')
        <script src="{{asset('assets/js/guest/home/home.js')}}"></script>
        <script src="{{asset('assets/js/guest/home/jquery/home.js')}}"></script>
    @endpush
</x-Guest.Layout.Layout>