@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tweets</h1>
            <h3>Click highlighted hashtags to exclude</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div id="app">
        <div class="row">
            <div class="col-lg-12">
                <form :action="url" method="get">
                    {{ csrf_field() }}

                    <label>User:<input id="tuser" type="search" class="form-control input-sm" value="{{$id}}" v-model="user" placeholder="Vaild Twitter Handle"
                                       aria-controls="dataTables-example"></label>
                    <label>Optional Hash Tag Filter (omit #):<input id="tfilter" type="search" class="form-control input-sm" value="{{$filter}}" v-model="filter" placeholder="Hashtag to Exclude"
                                                  aria-controls="dataTables-example"></label>
                    <button value="Search">Search</button>
                </form>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Last Month of Tweets...
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Tweet</th>
                                <th>Likes</th>
                                <th>Retweets</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 0; ?>
                            @foreach (($tweet_array) as $tweet)
                                <?php $counter++; ?>
                                <tr class="{{$counter%2?'even':'odd'}} gradeX">
                                    <td>{{$tweet['tweet_date']}}</td>
                                    <td>{!! html_entity_decode($tweet['text']) !!}</td>
                                    <td class="center"> {{$tweet['likes']}}</td>
                                    <td class="center">{{$tweet['rts']}}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@stop