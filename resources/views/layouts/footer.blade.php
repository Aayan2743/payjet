<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">My QR Code</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="" class="text-danger">NOTES:</label>
                <ol class="text-danger">1.
                    <span class="text-success">
                        Rs.2+(18% GST)</span>
                    on every transaction.
                </ol>
                <ol class="text-danger">2. 3%+GST on Credit Card to UPI transaction.</ol>
                <ol class="text-danger">3. Please do not use Airtel Payment Bank</ol>
                <ol class="text-danger">4. Use QR Code for transactions below 1,00,000 only</ol>
            </div>
            <div class="container text-center">
                <img src="images/scanner.svg" alt="">
            </div>
        </div>
    </div>
</div>





<!-- scanner end -->
<!-- modal start -->

<!-- end -->
<!-- form -->
<!-- Banner============================================= -->
<!------------------------------cards end------------------------>
<!-- <!-- Script -->
<!-- cart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>
    window.onload = function () {
        var ctx = document
            .getElementById("Graph")
            .getContext("2d");
        var LineChart = new Chart(ctx).Line(graph, options);
    }
    var options = {
        responsive: true
    };
    var graph = {
        labels: [
            "2024-01",
            "2024-02",
            "2024-03"

        ], // 12
        datasets: [{
            label: "Dados primários",
            fillColor: "rgba(255, 204, 175)",
            strokeColor: "rgba(255, 122, 47, 1)",
            pointColor: "rgba(255, 122, 47, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "#4d90fe",
            data: [

                2000000,
                1500000,
                1000000,
                5000000
            ] // 12
        }]
    };

</script>
<!-- pie chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
    $(window).load(function () {
        $('#myModal').modal('show');
    });

</script>
<script>
    function Show_Div(Div_id) {
        if (false == $(Div_id).is(':visible')) {
            $(Div_id).show(1000);
        } else {
            $(Div_id).hide(1000);
        }
    }

</script>
<script src="{{asset('vendor/js/vendor.js')}}"></script>
<!-- <script src="bootstrap.bundle.min.js"></script> -->
<!-- <script src="owl.carousel.min.js"></script> -->
<!-- <script src="switcher.min.js"></script> -->
<script src="{{asset('vendor/js/theme.js')}}"></script>
</body>

</html>
