<div class="navigation" ng-controller="NavigationController">
    <div class="nav-menu">
        <ul>
            <li ng-repeat="page in pageRoutes" ng-click="setTab(page.url)" ng-class="{ 'active': activeTab === page.url }">
                {{page.name}} 
            </li> 
        </ul>
    </div>
    <hr>
    <div ng-include="activeTab ? currentPage.url : defaultPage" class="animate__animated animate__slideInUp" style="animation-duration: .5s;"></div>
</div>