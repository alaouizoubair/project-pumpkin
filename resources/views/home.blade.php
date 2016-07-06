@extends('default')

@section('content')
	
	<md-toolbar class="md-hue-2">
      <div class="md-toolbar-tools">
        <h2>
          <span>LA PASSERELLE</span>
        </h2>
        <div flex></div>
        <md-button class="md-icon-button" aria-label="Settings" >
          <md-icon md-svg-icon="img/icons/menu.svg"></md-icon>
        </md-button>
      </div>
    </md-toolbar>

	<div layout="row" ng-controller="AppCtrl"  class="mainContainer">
		<md-content ng-controller="AppCtrl"  flex layout="column">
		    <ng-view>
		   		View Content
		    </ng-view>
		</md-content>

		<md-sidenav layout="column" class="sidenav1" md-is-locked-open='true'>
			SideNav
		</md-sidenav>
	</div>
	

@endsection