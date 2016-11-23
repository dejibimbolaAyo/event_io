@extends('layouts.dashboard.main')
@section('title', 'Dashboard')
@section('content')
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Events Dashboard
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row panel" style="background-color: transparent;">
    <div class="panel-heading"><h4>Recent Events Statistics</h4></div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>
            <p>Seats Booked</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">Open Event<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>53</h3>
            <p>Invited Guests</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Open Event<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>
            <p>Attending</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Open Event<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
             <h3>65,500</h3>
            <p>Events on Events.io</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{URL::route('eventDetails')}}" class="small-box-footer">Create Event Now<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
      <!-- ./col -->
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
          <!-- Tabs within a box -->
          <ul class="nav nav-tabs pull-right">
            <li class="active"><a href="#revenue-chart" data-toggle="tab">New Events</a></li>
            <li><a href="#sales-chart" data-toggle="tab">Old Events</a></li>
            <li class="pull-left header"><i class="fa fa-inbox"></i>Events</li>
          </ul>
          <div class="tab-content no-padding">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
              <table class="table table-stripped table=responsive table-bordered">
                <thead>
                <td></td>
                  <td>
                    Event Name
                  </td>
                  <td>
                    Date
                  </td>
                  <td>
                    Venue
                  </td>
                  <td>
                    Time
                  </td>
                  <td></td>
                </thead>
                <tbody class="table-hover">
                <tr>
                  <td></td>
                  <td>hi</td>
                  <td>hi</td>
                  <td>hi</td>
                  <td>hi</td>
                  <td></td>
                </tr>
                  
                </tbody>
              </table>
            </div>
            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">no there</div>
          </div>
        </div>
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <!-- right col -->
      <div class="col-md-5">
        <div class="panel" style="height: 345px">
          show info about an event clicked on on the list
        </div>
      </div>
    </div>
    <!-- /.row (main row) -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop