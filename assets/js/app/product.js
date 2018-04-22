angular.
module('productApp').
component('productCreation', {
    template: 
        '<ul>' +
        '<li">' +
        '<span>{{phone.name}}</span>' +
        '<p>{{phone.snippet}}</p>' +
        '</li>' +
        '</ul>',
    controller: function ProductCreationController() { 
        if (process_step == 2) {
            this.phones = [{
                name: 'Tmall',
                snippet: 'Fast just got faster with Nexus S.'
            }, {
                name: 'Taobao',
                snippet: 'The Next, Next Generation tablet.'
            }];
        }
    }
});

angular.
module('productApp').
component('productMarketplace', {
    template: 
        '<ul>' +
        '<li ng-repeat="marketplace in $ctrl.marketplaces">' +
        '<span>{{marketplace.name}}</span>' +
        '</li>' +
        '</ul>',
    controller: function ProductMarketplaceController() {
        if (process_step == 1) {
            this.marketplaces = [{
                name: 'Tmall',
                snippet: 'Fast just got faster with Nexus S.'
            }, {
                name: 'Taobao',
                snippet: 'The Next, Next Generation tablet.'
            }]; 
        }
    }
});