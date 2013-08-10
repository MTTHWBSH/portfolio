/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'portfolio\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-linkedin' : '&#xe001;',
			'icon-twitter' : '&#xe000;',
			'icon-github' : '&#xe002;',
			'icon-mail' : '&#xe004;',
			'icon-arrow-down-alt1' : '&#xe003;',
			'icon-arrow-right' : '&#xe005;',
			'icon-arrow-left' : '&#xe006;',
			'icon-arrow-right-2' : '&#xe007;',
			'icon-comment' : '&#xe008;',
			'icon-user' : '&#xe009;',
			'icon-arrow-left-2' : '&#xe00a;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};