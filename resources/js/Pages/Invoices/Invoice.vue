<script setup>

import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import logo from '../../images/apple-icon.png';
</script>

<template>

    <Head title="All Subscriptions" />
    <AuthenticatedLayout>
        <!-- Body Start -->
        <div class="invoice clearfix">
            <div class="container">
                <div class="row justify-content-md-center mt-custom-6">
                    <div class="col-lg-8 col-md-10">
                        <div class="invoice-header justify-content-between">
                            <div class="invoice-header-logo">
                                <img :src="logo" alt="invoice-logo">
                            </div>
                            <div class="invoice-header-text">
                                <a href="#" class="download-link">Download</a>
                            </div>
                        </div>
                        <div class="invoice-body">
                            <div class="invoice_dts">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="invoice_title">Invoice</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="vhls140">
                                            <ul>
                                                <li><div class="vdt-list">Invoice to John Doe</div></li>
                                                <li><div class="vdt-list">140 St Kilda Rd</div></li>
                                                <li><div class="vdt-list">Melbourne, Victoria</div></li>
                                                <li><div class="vdt-list">3000, Australia</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="vhls140">
                                            <ul>
                                                <li><div class="vdt-list">Invoice ID : YCCURW-000000</div></li>
                                                <li><div class="vdt-list">Order Date : 10/05/2022</div></li>
                                                <li><div class="vdt-list">Near MBD Mall,</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-table bt_40">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Event Details</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Unit Price</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>										
                                                <td>1</td>	
                                                <td><a href="#" target="_blank">Tutorial on Canvas Painting for Beginners</a></td>	
                                                <td>Online</td>	
                                                <td>1</td>
                                                <td>$75.00</td>
                                                <td>$75.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td colspan="5">
                                                    <div class="user_dt_trans text-end pe-xl-4">
                                                        <div class="totalinv2">Invoice Total : USD $36.00</div>
                                                        <p>Paid via Paypal</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>									
                                    </table>
                                </div>
                            </div>
                            <div class="invoice_footer">
                                <div class="cut-line">
                                    <i class="fa-solid fa-scissors"></i>
                                </div>
                                <div class="main-card">
                                    <div class="row g-0">
                                        <div class="col-lg-7">
                                            <div class="event-order-dt p-4">
                                                <div class="event-thumbnail-img">
                                                    <img :src="logo" alt="">
                                                </div>
                                                <div class="event-order-dt-content">
                                                    <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                    <span>Wed, Jun 01, 2022 5:30 AM. Duration 1h</span>
                                                    <div class="buyer-name">John Doe</div>
                                                    <div class="booking-total-tickets">
                                                        <i class="fa-solid fa-ticket rotate-icon"></i>
                                                        <span class="booking-count-tickets mx-2">1</span>x Ticket
                                                    </div>
                                                    <div class="booking-total-grand">
                                                        Total : <span>$75.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="QR-dt p-4">
                                                <ul class="QR-counter-type">
                                                    <li>Online</li>
                                                    <li>Counter</li>
                                                    <li>0000000001</li>
                                                </ul>
                                                <div class="QR-scanner">
                                                    <img src="images/qr.png" alt="QR-Ticket-Scanner">
                                                </div>
                                                <p>Powered by Barren</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cut-line">
                                    <i class="fa-solid fa-scissors"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Body End -->
    </AuthenticatedLayout>

</template>
<style scoped>
.mt-custom-6 {
    margin-top: 4rem;
}
</style>