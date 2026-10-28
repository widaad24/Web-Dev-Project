<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print();">
                    <i class="bi bi-printer me-1"></i>Print
                </button>
            </div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>My Company</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Alice Johnson<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Jane Smith<br>
                janesmith@example.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pro Beard Trimmer</td>
                        <td>$49.90</td>
                        <td>1</td>
                        <td class="text-end">$49.90</td>
                    </tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">$49.90</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>
 
<style>
@media print {

    /* Hide sidebar */
    #mySidebar,
    .sidebar {
        display: none !important;
    }

    /* Hide burger header */
    #myBurger {
        display: none !important;
    }

    /* Hide Print and Back to Details buttons */
    .btn {
        display: none !important;
    }

    /* Remove all card shadows and borders */
    .card,
    .shadow,
    .shadow-sm {
        box-shadow: none !important;
        border: none !important;
    }

    /* Remove Bootstrap border decorations */
    .border-start,
    .border-5,
    .border-primary {
        border: none !important;
    }

    /* Make invoice use available printing width */
    .col.bg-light {
        flex: 0 0 100% !important;
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
    }

    /* Clean printing background */
    body {
        background: #f8f9fa !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    /* Preserve white card backgrounds */
    .card {
        background-color: white !important;
    }

    /* Preserve dark table header */
    .table-dark,
    .table-dark th {
        background-color: #212529 !important;
        color: white !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    /* Preserve table styling */
    .table {
        width: 100% !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    /* Prevent invoice sections from splitting */
    .card {
        page-break-inside: avoid;
        break-inside: avoid;
    }
}
</style>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>