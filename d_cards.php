<style>
.card {
    margin: 0;
    padding: 0;
}

.card-body {
    display: inline-block;
    font-family: "Roboto", sans-serif;
    background: grey;
    padding: 20px;
    width: 250px;
    margin-bottom: 30px;
    margin-left: 120px;
    height: 120px;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.float-left {
    float: left;

}

.float-right {
    float: right;
}

.card-body h3 {
    margin-top: 15px;
    margin-bottom: 5px;
}

.currency,
.count {
    font-size: 30px;
    font-weight: 500;
}

.card-body p {
    font-size: 16px;
    margin-top: 0;
}

.card-body i {
    font-size: 95px;
    opacity: 0.5;
}
</style>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<div class="card">
    <div class="card-body">
        <div class="float-left">
            <h3>
                <span class="currency">₹</span>
                <span class="count">2000</span>
            </h3>
            <p>Sales</p>
        </div>
        <div class="float-right">
            <i class='bx bx-cart'></i>
        </div>
    </div>
    <div class="card-body" style="margin: left 50px;">
        <div class="float-left">
            <h3>
                <span class="count">20</span>
            </h3>
            <p>Bills</p>
        </div>
        <div class="float-right">
            <i class='bx bx-receipt'></i>
        </div>
    </div>
    <div class="card-body" style="margin: left 50px;">
        <div class="float-left">
            <h3>
                <span class="count">200</span>
            </h3>
            <p>Products</p>
        </div>
        <div class="float-right">
            <i class='bx bx-package'></i>
        </div>
    </div>
</div>


<script type="text/JavaScript">
    $('.count').each(function() {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  </script>