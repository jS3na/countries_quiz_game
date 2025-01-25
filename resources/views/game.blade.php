<x-main-layout pageTitle="Game">

    <div class="container">

        <x-question :$country :$currentQuestion :$totalQuestions/>

        <div class="row">

            @foreach ($answers as $answer)

            <x-answer :capital="$answer" />

            @endforeach

        </div>

    </div>

    <!-- cancel game -->
    <div class="text-center mt-5">
        <a href="{{ route('startGame') }}" class="btn btn-outline-danger mt-3 px-5">CANCELAR JOGO</a>
    </div>

</x-main-layout>