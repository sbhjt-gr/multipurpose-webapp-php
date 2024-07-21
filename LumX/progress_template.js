angular.module("lumx.progress").run(['$templateCache', function(a) { a.put('progress.html', '<div class="progress-container progress-container--{{ lxProgress.lxType }} progress-container--{{ lxProgress.lxColor }}"\n' +
    '     ng-class="{ \'progress-container--determinate\': lxProgress.lxValue,\n' +
    '                 \'progress-container--indeterminate\': !lxProgress.lxValue }">\n' +
    '    <div class="progress-circular"\n' +
    '         ng-if="lxProgress.lxType === \'circular\'"\n' +
    '         ng-style="lxProgress.getProgressDiameter()">\n' +
    '        <svg class="progress-circular__svg">\n' +
    '            <circle class="progress-circular__path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10" ng-style="lxProgress.getCircularProgressValue()">\n' +
    '        </svg>\n' +
    '    </div>\n' +
    '\n' +
    '    <div class="progress-linear" ng-if="lxProgress.lxType === \'linear\'">\n' +
    '        <div class="progress-linear__background"></div>\n' +
    '        <div class="progress-linear__bar progress-linear__bar--first" ng-style="lxProgress.getLinearProgressValue()"></div>\n' +
    '        <div class="progress-linear__bar progress-linear__bar--second"></div>\n' +
    '    </div>\n' +
    '</div>\n' +
    '');
	 }]);