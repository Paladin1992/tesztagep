<footer>
    <div class="content">
        <div class="hun-product">
            <img alt="Magyar termék embléma" src="images/magyar-termek.png"/>
        </div>

        <?php
            $startYear = 2019;
            $currentYear = date("Y");
            $years = $startYear.($currentYear > $startYear ? '-'.$currentYear : '');
        ?>
        <div class="copyright">
            &copy;<?=($years.' Lakatos László')?>
        </div>
    </div>
</footer>