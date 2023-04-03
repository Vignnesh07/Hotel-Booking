@extends('layouts.dash')

@section('content')

<div class='flex-container'>
    <div class='dashboard-item'>
        <div class='item-row-1'>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-bed " style='color:darkseagreen;'></i><br>
                    <b>21</b>
                    <p>Total Rooms</p>
                </div>
            </div>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-bookmark" style='color:darkgoldenrod;'></i><br>
                    <b>21</b> 
                    <p>Reservation</p>
                </div>
            </div>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-clipboard-user" style='color:darkturquoise;'></i><br>
                    <b>21</b>
                    <p>Staffs</p>
                </div>
            </div>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-comments" style='color:red;'></i><br>
                    <b>21</b> 
                    <p>Complaints</p>
                </div>
            </div>
        </div>
        <div class='item-row-2'>
            <div class ='items'>
                <div>                    
                    <i class="fa-sharp fa-solid fa-money-bill" style='color:brown;'></i><br>
                    <b>21</b> 
                    <p>Total revenue</p>                   
                </div>
            </div>
            <div class ='items'>
                <div>                   
                    <i class="fa-sharp fa-solid fa-bars" style='color:green;'></i><br>
                    <b>21</b> 
                    <p>Booked Rooms</p>
                </div>
            </div>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-circle-check" style='color:purple;'></i><br>
                    <b>21</b> 
                    <p>Available Rooms</p>
                </div>
            </div>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-check-double" style='color:forestgreen;'></i><br>
                    <b>21</b> 
                    <p>Checked in</p>
                </div>
            </div>
        </div>
        <div class='item-row-3'>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-coins" style='color:crimson;'></i><br>
                    <b>21</b> 
                    <p>Total Pending Payments</p>
                </div>
            </div>
            <div class ='items'>
                <div>
                    <i class="fa-sharp fa-solid fa-credit-card" style='color:#3c57a6;'></i><br>
                    <b>21</b> 
                    <p>Pending Payments</p>
                </div>
            </div>
        </div>
    </div>
</div>
    



@endsection