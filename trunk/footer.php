<footer>
    <div class="content">
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