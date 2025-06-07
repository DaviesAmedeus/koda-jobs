@props([
    'title'
])

 <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="dash-title">{{ $title }}</h1>
            </div>

            <div class="col-md-6 " style="text-align: end">
                <button type="button" href="#!" class="btn btn-primary btn-lg mb-1" data-toggle="modal"
                    data-target="#exampleModalCenter"> <i class="fas fa-plus"></i></button>
            </div>
        </div>
