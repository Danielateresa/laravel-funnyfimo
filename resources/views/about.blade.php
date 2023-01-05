@extends('layouts.app')

@section('title')
About me
@endsection

@section('content')
<div class="container py-5">
    <h1 class="text-center">About me</h1>

    <div class="container pt-5">
        <div class="row">
            <div class="col-3">
                <img class="avatar" src="{{Vite::asset('resources/img/ai.jpg')}}" alt="avatar">
            </div>
            <!-- col-3 avatar-->
            <div class="col-8">
                <h4>La Creativa Digitale</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas repellat fuga doloremque nihil,
                    sequi impedit, sed, a veniam quod architecto officia eius blanditiis odio mollitia? Fuga accusamus
                    similique eaque amet ex. Maxime praesentium qui neque nesciunt, sunt, cumque ipsam iusto cupiditate
                    quos esse ullam aspernatur asperiores exercitationem itaque magni doloremque excepturi corrupti iure
                    ducimus et laudantium error dignissimos dolorem nostrum? Asperiores optio, ipsa esse odio tempore
                    distinctio! Officia, numquam esse! Facilis incidunt consequuntur laborum et commodi nesciunt,
                    recusandae eligendi beatae quae quis laudantium, fugiat omnis hic ea aspernatur voluptas suscipit
                    dignissimos ullam iure exercitationem. Ab numquam libero iure sit omnis?</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas repellat fuga doloremque nihil,
                    sequi impedit, sed, a veniam quod architecto officia eius blanditiis odio mollitia? Fuga accusamus
                    similique eaque amet ex. Maxime praesentium qui neque nesciunt, sunt.</p>

                <span class="signature">Daniela</span>
            </div>
            <!-- col-8 text -->
        </div>
    </div>


</div>
@endsection