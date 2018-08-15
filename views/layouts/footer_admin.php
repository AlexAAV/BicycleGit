    <div class="page-buffer"></div>
</div>



<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">ИП "Bicycle" © 2018</p>
                <p class="pull-right">developed by Andreichuk A.V.</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->


<!-- <script src="/template/js/jquery.js"></script> -->


<script src="/template/js/jquery-3.3.1.js"></script>
<script src="/template/js/moment-with-locales.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<!-- <script src="/template/js/bootstrap-datetimepicker.min.js"></script> -->
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script src="/template/js/jquery.maskedinput.min.js"></script>


<script>
$(function(){
    $("#phone").mask("+375 (99) 999-99-99");   
    $("#email").inputmask({
    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
    greedy: false,
    onBeforePaste: function (pastedValue, opts) {
      pastedValue = pastedValue.toLowerCase();
      return pastedValue.replace("mailto:", "");
    },
    definitions: {
      '*': {
        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
        cardinality: 1,
        casing: "lower"
      }
    }
  });
}); 
</script>

<script>
    $(document).ready(function() {
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>