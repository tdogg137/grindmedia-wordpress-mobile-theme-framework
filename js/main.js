// ==========================================================================
// PROJECT SPECIFIC JAVASCRIPT
// --------------------------------------------------------------------------
// Project:		GrindMedia Mobile Wordpress Framework
// Author:		Jeffrey Mayfield jeff.mayfield@grindmedia.com
// ==========================================================================


// Implement jQuery Flexnav
// --------------------------------------------------------------------------

$("[role='navigation']").flexNav();

// Gets Domain
var s = location.hostname.split('.');
var domain = s[s.length-2]+'.'+s[s.length-1];

// Modifies External Links To Open In A New Window
$('a').filter(function() {
        if (this.hostname) {
                var t = this.hostname.split('.');
                var test = t[t.length-2]+'.'+t[t.length-1];
                if (test != domain)
                return true;
                else
                return false;
        }
}).attr('target', '_blank');