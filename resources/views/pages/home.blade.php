@extends('layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
    <div class="container mt-32" id="home">
        <div class="col-12">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="card flex justify-between bg-black opacity-95 text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Overview
                            </h3>
                            <div class="col-12">
                                <div class="row">
                                    <div class="student-numbers col-6">
                                        <h5>Students Registered</h5>
                                        <table class="table table-borderless table-dark">
                                            <tbody>
                                            <tr>
                                                <td style="width:25%;">Skiers</td>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 83.3%;background-color: #c32b32;margin-left:0;"
                                                             aria-valuenow="100"
                                                             aria-valuemin="0" aria-valuemax="120">100
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:25%;">Snowboarders
                                                </th>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 75%;background-color: #c32b32;margin-left:0;"
                                                             aria-valuenow="15"
                                                             aria-valuemin="0" aria-valuemax="20">15
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:25%;">Sit Skiers
                                                </th>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 50%;background-color: #c32b32;margin-left:0;"
                                                             aria-valuenow="10"
                                                             aria-valuemin="0" aria-valuemax="20">10
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="instructor-numbers col-6">
                                        <h5>Instructors Registered</h5>
                                        <table class="table table-borderless table-dark">
                                            <tbody>
                                            <tr>
                                                <td style="width:25%;">Skiers</td>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 50%;background-color: #c32b32;margin-left:0;"
                                                             aria-valuenow="100"
                                                             aria-valuemin="0" aria-valuemax="240">120
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:25%;">Snowboarders
                                                </th>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 50%;background-color: #c32b32;margin-left:0;"
                                                             aria-valuenow="15"
                                                             aria-valuemin="0" aria-valuemax="30">15
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:25%;">Sit Skiers
                                                </th>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: 25%;background-color: #c32b32;margin-left:0;"
                                                             aria-valuenow="10"
                                                             aria-valuemin="0" aria-valuemax="40">10
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="flex justify-between w-full">
                    <div class="card flex-1 shadow bg-black opacity-95 text-white">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">Announcements</h3>
                            <p class="">March, 19th, 2019</p>
                            <p class="card-text"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias amet animi dolor, eaque fugiat hic illum iste laborum magnam, minima minus molestias non perspiciatis temporibus vel vero voluptatem voluptatum.</span>
                            </p>
                        </div>
                    </div>

                    <div class="card shadow mx-2 flex-1 bg-black opacity-95 text-white">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">Inspiration</h3>
                            <blockquote class="card-text blockquote"><i class="fas fa-quote-left text-red text-3xl"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eius ex
                                facilis incidunt libero magni nesciunt numquam perferendis placeat quaerat quia, quos
                                ratione recusandae rem repellat sit ullam ut veritatis. <i
                                        class="fas fa-quote-right text-red text-3xl"></i>
                            </blockquote>
                        </div>
                    </div>

                    <div class="card shadow-lg flex-1 bg-black text-white opacity-95">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">Upcoming Events</h3>
                            <ol>
                                <li class="text-red-lighter font-bold text-xl">March, 19th, 2019</li>
                                <p>Lorem ipsum dolor sit amet, elit. A accusantium, ad commodi.
                                </p>
                                <li class="text-red-lighter font-bold text-xl">March, 19th, 2019</li>
                                <p> temporibus tenetur veniam? Atque dolore quidem tempore.</p>
                                <li class="text-red-lighter font-bold text-xl">March, 19th, 2019</li>
                                <p> delectus ex fugit itaque laudantium minus, molestias mollitia quis quos
                                    recusandae</p>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{--<script>--}}
    {{--window.onload = function () {--}}

    {{--var chart = new CanvasJS.Chart("chartContainer", {--}}
    {{--animationEnabled: true,--}}
    {{--title: {--}}
    {{--text: "Email Categories",--}}
    {{--horizontalAlign: "left"--}}
    {{--},--}}
    {{--data: [{--}}
    {{--type: "doughnut",--}}
    {{--startAngle: 60,--}}
    {{--//innerRadius: 60,--}}
    {{--indexLabelFontSize: 17,--}}
    {{--indexLabel: "{label} - #percent%",--}}
    {{--toolTipContent: "<b>{label}:</b> {y} (#percent%)",--}}
    {{--dataPoints: [--}}
    {{--{y: 67, label: "Inbox"},--}}
    {{--{y: 28, label: "Archives"},--}}
    {{--{y: 10, label: "Labels"},--}}
    {{--{y: 7, label: "Drafts"},--}}
    {{--{y: 15, label: "Trash"},--}}
    {{--{y: 6, label: "Spam"}--}}
    {{--]--}}
    {{--}]--}}
    {{--});--}}
    {{--chart.render();--}}

    {{--}--}}
    {{--</script>--}}
@endsection
