<div class="alert alert-danger">
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @if ($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
</div>
