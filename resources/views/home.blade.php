@extends('default')

@section('content')
	
	<md-toolbar class="md-hue-2">
      <div class="md-toolbar-tools">
        <h2>
          <span>LA PASSERELLE&nbsp;&nbsp;&nbsp;</span>
        </h2>
        <h6>(PROJECT-PUMPKIN)</h6>
        <div flex></div>
        <md-button class="md-icon-button" aria-label="Settings" >
          <md-icon md-svg-icon="img/icons/menu.svg"></md-icon>
        </md-button>
      </div>
    </md-toolbar>

	<div layout="row" ng-controller="AppCtrl"  class="mainContainer">
		
		<md-content  flex layout="column" class="contentOne">
		    <md-tabs class="" md-selected="data.selectedIndex" md-align-tabs="top" layout-margin>
		    	<md-tab id="tab1">
		    		<md-tab-label>Description</md-tab-label>
			    	<md-tab-body>
			    		View for Item #1
			    	</md-tab-body>
		    	</md-tab>
		    	<md-tab id="tab2">
		    		<md-tab-label>Inscription</md-tab-label>
			    	<md-tab-body >
			    		<div class="inscription-tab" layout="row">
				    		<div layout="column" flex layout-align="center stretch" >
				    			<form method="POST" action="{{route('user.create')}}">

				    				{!! csrf_field() !!}

						    		<md-input-container flex >
							    		<label>Nom</label>
							    		<input name="last_name" type="text" />
						    		</md-input-container>

						    		<md-input-container flex >
							    		<label>Prénom</label>
							    		<input name="first_name" type="text" />
						    		</md-input-container>

						    		<md-input-container flex >
							    		<label>Spécialité</label>
							    		<input name="skill" type="text" />
						    		</md-input-container>

						    		<md-input-container flex >
							    		<label>Email</label>
							    		<input name="email" type="email" />
						    		</md-input-container>

						    		<div layout="row" flex layout-align="center center" >
							    		<md-button class="md-fab md-primary md-hue-2" type="submit" aria-label="Comment" >
								            <md-icon md-font-set="material-icons" > done </md-icon>
								        </md-button>
							        </div>
						        </form>

				    		</div>
				    		<div flex class="graphic-inscription" layout="row" layout-align="center center">
				    			<img src="{{asset('images/mrc2.png')}}" >
				    		</div>
			    		</div>
			    	</md-tab-body>
		    	</md-tab>
		    </md-tabs>
		    
		</md-content>

		<md-sidenav layout="column" class="right-side-nav" md-is-locked-open='true'>
		
			<md-content layout-margin layout="column" layout-align="start center" md-theme="docs-dark">
					
				<h4><span>PROJECT PUMPKIN</span></h4>
				<p style="text-align:justify;">
					
					Le projet est open source, vous pouvez le consulter sur github
					<a href="https://github.com/alaouizoubair/project-pumpkin" class="md-caption" target="_blank"> 
						<md-icon style="color:gold;" md-font-set="material-icons" > cloud </md-icon>
					</a>.
					<br><br>
					L'équipe de développement est à votre disposition pour répondre à vos questions. N'hésitez pas à nous laisser un message.
				</p>

				<div md-theme="docs-dark" layout="column" layout-padding="" layout-align="center stretch"">
					<form>
						<md-input-container flex class="md-block">
				    		<label>Message</label>
				    		<textarea ng-model="user.biography" md-maxlength="150"  rows="5" md-select-on-focus></textarea>
			    		</md-input-container>
		    		</form>
	    		</div>
	    		<md-button class="md-fab md-primary md-hue-2"  aria-label="Comment" >
			            <md-icon md-font-set="material-icons" > send </md-icon>
			    </md-button>
	
			</md-content>
			
		</md-sidenav>
	</div>
	

@endsection