<div class="panel panel-default">
    <div class="panel-heading">Times Trained</div>
    <div class="panel-body">
        <div class="col-sm-8">
            <div id="canvas-holder">
                <canvas id="myChart" width="400" height="300"></canvas>
            </div>
            <script>
                $(function () {
                    var data = {
                        labels: ["Passing", "Shooting", "Dribbling", "Tackling", "Goalkeeping", "Interception"],
                        datasets: [
                            {
                                label: "My First dataset",
                                fillColor: "rgba(255,0,0,0.5)",
                                strokeColor: "rgba(220,220,220,0.8)",
                                highlightFill: "rgba(0,100,255,0.25)",
                                data: [
                                    {{Auth::User()->playerDetails->trainingDetails->passing_count}},
                                    {{Auth::User()->playerDetails->trainingDetails->passing_count}},
                                    {{Auth::User()->playerDetails->trainingDetails->passing_count}},
                                    {{Auth::User()->playerDetails->trainingDetails->passing_count}},
                                    {{Auth::User()->playerDetails->trainingDetails->passing_count}},
                                    {{Auth::User()->playerDetails->trainingDetails->passing_count}},
                                ]
                            }
                        ]
                    };
                    var ctx = $("#myChart").get(0).getContext("2d");
                    var myNewChart = new Chart(ctx).Bar(data);
                });
            </script>

        </div>
    </div>
</div>