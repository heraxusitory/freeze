</div>
<footer>
    @include('layouts.modals.modal')
    @include('layouts.modals.alert')
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{ asset('/plugins/jquery-mask.min.js') }}"></script>
    <script src="{{ asset('/plugins/jquery.rateyo.js') }}"></script>

    <script src="{{ asset('js/main/question.js') }}"></script>
    <script src="{{ asset('js/main/request.js') }}"></script>
    <script src="{{ asset('js/main/review.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>

    <script src="{{ asset('/js/main/index.js') }}"></script>
    @yield('js')
</footer>
</body>
</html>
