        <?php
            $todays__revenue = 0;
            $total__revenue = 0;

            //Today's Sell_____________________________________________
            $date = date('Y-m-d');
            $sql = "SELECT * FROM history WHERE date = '$date'";
            $runSql = mysqli_query($conn, $sql);
            $todays__sell = mysqli_num_rows($runSql);

            //Total Sell_________________
            $sql = "SELECT * FROM history";
            $runSql = mysqli_query($conn, $sql);
            $total__sell = mysqli_num_rows($runSql);

            //Total Revenue__________________
            $sql = "SELECT * FROM history";
            $runSql = mysqli_query($conn, $sql);
            $total__product__arr = array();
            $todays__product__arr = array();
            while ($sell = mysqli_fetch_assoc($runSql)){
                $product__code = $sell['product'];
                $date = date('Y-m-d');
                if($sell['date'] == $date){
                    array_push($todays__product__arr,$product__code);
                }
                array_push($total__product__arr,$product__code);
            }
            foreach($total__product__arr as $product){
                $sql = "SELECT price FROM product WHERE code = '$product'";
                $runSql = mysqli_query($conn, $sql);
                $product_data = mysqli_fetch_assoc($runSql);
                $total__revenue = $total__revenue + $product_data['price'];
            }
            foreach($todays__product__arr as $product){
                $sql = "SELECT price FROM product WHERE code = '$product'";
                $runSql = mysqli_query($conn, $sql);
                $product_data = mysqli_fetch_assoc($runSql);
                $todays__revenue = $todays__revenue + $product_data['price'];
            }
        ?>
        <!-- >>>>> Component Analytics Start <<<<<<< -->
        <div id="analytics">
            <div class="analytics_card">
                <h4 class="card_title:analytics">Daily Sell</h4>
                <div class="card_sub_title:analytics"><?=$todays__sell?> <small>Item</small></div>
            </div>
            <div class="analytics_card">
                <h4 class="card_title:analytics">Total Sell</h4>
                <div class="card_sub_title:analytics"><small><?=$total__sell?> Item</small></div>
            </div>
            <div class="analytics_card">
                <h4 class="card_title:analytics">Daily Revenue</h4>
                <div class="card_sub_title:analytics">&#2547; <?=$todays__revenue ?></div>
            </div>
            <div class="analytics_card">
                <h4 class="card_title:analytics">Total Revenue</h4>
                <div class="card_sub_title:analytics">&#2547; <?=$total__revenue ?></div>
            </div>
        </div>