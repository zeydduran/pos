<?php

require '_config.php';

$templateTitle = 'Cancel Order';

require '../../template/_header.php';

// Cancel Order
$order = [
    'id'  => '20181029A3C1',
];
$pos->prepare($order, \Mews\Pos\Gateways\AbstractGateway::TX_CANCEL);

$pos->cancel();

$response = $pos->getResponse();
?>

<div class="result">
    <h3 class="text-center text-<?php echo $pos->isSuccess() ? 'success' : 'danger'; ?>">
        <?php echo $pos->isSuccess() ? 'Cancel Order is successful!' : 'Cancel Order is not successful!'; ?>
    </h3>
    <dl class="row">
        <dt class="col-sm-12">All Data Dump:</dt>
        <dd class="col-sm-12">
            <pre><?php dump($response); ?></pre>
        </dd>
    </dl>
    <hr>
    <div class="text-right">
        <a href="index.php" class="btn btn-lg btn-info">&lt; Click to payment form</a>
    </div>
</div>

<?php require '../../template/_footer.php'; ?>
