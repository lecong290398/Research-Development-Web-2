<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1837">
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Remove</th>
                                <th scope="col">Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Product Name Dada</td>
                                <td>124,90$</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td><button class="btn btn-sm btn-danger">Remove</button> </td>
                                <td>124,90$</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"><strong>Total:</strong> <span>346,90 $</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2" style="float: right">
                <button type="button" class="btn btn-default">
                    Update cart
                </button>

                <button type="button" class="btn btn-success">
                    Checkout
                </button>
            </div>
        </div>
    </div>
</div>