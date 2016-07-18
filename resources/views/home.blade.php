@extends('default')

@section('content')
    <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left" md-is-locked-open="$mdMedia('gt-md')">
      <md-toolbar class=" md-hue-2">
        <span flex></span>
        <div layout="column" layout-align="center center" class="md-toolbar md-toolbar-tools-bottom inset">
          <user-avatar></user-avatar>
          <span></span>
        </div>
      </md-toolbar>
      <md-toolbar class="md-tall md-hue-2">
        <span flex></span>
        <div layout="column" class="md-toolbar-tools-bottom inset" layout-align="center center">
          <div>
			<p class="toolbar">
          Le projet a besoin de vous pour gérer la communication, et répondre aux questions des utilisateurs. Envoyez nous un mail pour nous donner un coup de main.<br>Merci
          </p>
          </div>
          <div>zoubair@alaoui.in</div>
        </div>
      </md-toolbar>
      <md-subheader>Phase 1:</md-subheader>
      <md-list>
	      <md-item>
	      	<md-item-content md-ink-ripple layout="row" layout-align="start center">
	            <div class="inset">
	              <ng-md-icon icon=""></ng-md-icon>
	            </div>
	            <div class="inset">Atteindre 100 utilisateurs
	            </div>
	          </md-item-content>
	      </md-item>
	      <md-divider></md-divider>

	      <md-subheader>Phase 2:</md-subheader>
	      <md-item>
	      	<md-item-content md-ink-ripple layout="row" layout-align="start center">
	            <div class="inset">
	              <ng-md-icon icon=""></ng-md-icon>
	            </div>
	            <div class="inset">Mise en place de l'application
	            </div>
	          </md-item-content>
	      </md-item>
	      <md-divider></md-divider>

	      <md-subheader>Phase 3:</md-subheader>
	      <md-item>
	      	<md-item-content md-ink-ripple layout="row" layout-align="start center">
	            <div class="inset">
	              <ng-md-icon icon=""></ng-md-icon>
	            </div>
	            <div class="inset">Lancement 1/10/2016
	            </div>
	          </md-item-content>
	      </md-item>
	      <md-divider></md-divider>
    </md-list>
    </md-sidenav>
    <div layout="column" class="relative" layout-fill role="main">
      <!-- <md-button class="md-fab md-fab-bottom-right" aria-label="Add" ng-click="showAdd($event)">
        <ng-md-icon icon="add"></ng-md-icon>
      </md-button> -->
      <md-toolbar ng-show="!showSearch">
        <div class="md-toolbar-tools">
          <md-button ng-click="toggleSidenav('left')" hide-gt-md aria-label="Menu">
            <ng-md-icon icon="menu"></ng-md-icon>
          </md-button>
          <h3>
            La Passerelle
          </h3>
          <span flex></span>
          <!-- <md-button aria-label="Search" ng-click="showSearch = !showSearch">
            <ng-md-icon icon="search"></ng-md-icon>
          </md-button>
          <md-button aria-label="Open Settings" ng-click="showListBottomSheet($event)">
            <ng-md-icon icon="more_vert"></ng-md-icon>
          </md-button> -->
        </div>
        <md-tabs md-stretch-tabs class="md-primary" md-selected="data.selectedIndex">
          <md-tab id="tab1" aria-controls="tab1-content">
            DESCRIPTION
          </md-tab>
          <md-tab id="tab2" aria-controls="tab2-content">
            INSCRIPTION
          </md-tab>
        </md-tabs>
      </md-toolbar>
      <md-toolbar class="md-hue-1" ng-show="showSearch">
        <div class="md-toolbar-tools">
          <md-button ng-click="showSearch = !showSearch" aria-label="Back">
            <ng-md-icon icon="arrow_back"></ng-md-icon>
          </md-button>
          <h3 flex="10">
            Back
          </h3>
          <md-input-container md-theme="input" flex>
            <label>&nbsp;</label>
            <input ng-model="search.who" placeholder="enter search">
          </md-input-container>
          <md-button aria-label="Search" ng-click="showSearch = !showSearch">
            <ng-md-icon icon="search"></ng-md-icon>
          </md-button>
          <md-button aria-label="Open Settings" ng-click="showListBottomSheet($event)">
            <ng-md-icon icon="more_vert"></ng-md-icon>
          </md-button>
        </div>
       
      </md-toolbar>
      <md-content flex md-scroll-y>
        <ui-view layout="column" layout-fill layout-padding>
          <div class="inset" hide-sm></div>
            <ng-switch on="data.selectedIndex" class="tabpanel-container">
              <div role="tabpanel"
                   id="tab1-content"
                   aria-labelledby="tab1"
                   ng-switch-when="0"
                   md-swipe-left="next()"
                   md-swipe-right="previous()"
                   layout="row" layout-align="center center">
                  <md-card flex-gt-sm="90" flex-gt-md="80">
                    <md-card-content >
                      <h2>Description</h2>
	                      <div layout="row" layout-sm="column" layout-align="center center">
		                      <div flex="65" flex-sm="100">
			                      <p class="description">
			                      L'<b>information</b> a toujours été la frontière entre le savoir et l'ignorance, entre la vie et la survie. Aujourd'hui, si l'<b>éducation</b> est la voie vers l'information, l'<b>orientation</b> serait la boussole. Pour cela, <b>La Passerelle</b> à un seul objectif: Orienter les jeunes <b>talents</b> <i>Marocains</i>  dans leur parcours scolaire. Pour atteindre cet objectif, votre <b>expérience</b> proffessionel est importante, et nous vous encourageons à la partager.
			                      <br><br>
									En participant, vous serez invité à répondre à un seul email par semaine au maximum. Dans cet email, un <b>étudiant</b> intéressé, séduit, passioné par votre domaine vous demandera quel était votre <b>parcours</b> scolaire et professionel, ainsi qu'une petite description de votre activité.
									<br>
									Ces informations étant négligeable, voir même sans importance pour la plupart d'entre nous, risquent de jouer un rôle crucial dans l'orientation d'innombrable jeunes pour découvrir de nouveau horizon et saisir des <b>opportunités</b> qui semblent à ce jour improbables.
									</p>
		                        </div>
		                      <div flex>
		                      	<img src="{{asset('images/educ2.png')}}" >
		                      </div>
	                      </div>
                    </md-card-content>
                  </md-card>
              </div>
              <div role="tabpanel"
                   id="tab2-content"
                   aria-labelledby="tab2"
                   ng-switch-when="1"
                   md-swipe-left="next()"
                   md-swipe-right="previous()" 
                   layout="row" layout-align="center center">
                  <md-card flex-gt-sm="90" flex-gt-md="80">
                    <md-card-content>
                      <h2>Inscription</h2>
                      <div layout="row" layout-sm="column">
				    		<div flex="60" flex-sm="100">
				    			<form class="registration-form"  layout="column"  layout-align="center stretch" >

				    				{!! csrf_field() !!}

						    		<md-input-container flex >
							    		<label>Nom</label>
							    		<input name="last_name" ng-model="user.last_name" type="text" />
						    		</md-input-container>

						    		<md-input-container flex >
							    		<label>Prénom</label>
							    		<input name="first_name" ng-model="user.first_name" type="text" />
						    		</md-input-container>

						    		<md-input-container flex >
							    		<label>Spécialité</label>
							    		<input name="skill" ng-model="user.skill" type="text" />
						    		</md-input-container>

						    		<md-input-container flex >
							    		<label>Email</label>
							    		<input name="email" ng-model="user.email" type="email" />
						    		</md-input-container>

						    		<div layout="row" flex layout-align="center center" >
							    		<md-button class="md-fab md-primary md-hue-2" type="submit" aria-label="Comment" ng-click="registerUser($event)">
								            <ng-md-icon icon="done"></ng-md-icon>
								        </md-button>
							        </div>
						        </form>

						        <div flex hide class="registration-complete">
						        	<h1>Merci de votre participation
						        </div>

				    		</div>
				    		<span flex></span>
				    		<div flex="30" class="graphic-inscription" layout="row" layout-align="center center">
				    			<img src="{{asset('images/mrc2.png')}}" >
				    		</div>
			    		</div>
                    </md-card-content>
                  </md-card>
              </div>
              
          </ng-switch>
          
        </ui-view>
      </md-content>
    </div>
    
@endsection