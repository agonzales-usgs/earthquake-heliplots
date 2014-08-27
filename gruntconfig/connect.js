module.exports = (function () {
	var gateway = require('gateway'),
	    fs = require('fs'),
	    ini = require('ini');

	var config = ini.parse(fs.readFileSync('src/conf/config.ini', 'utf-8'));

	var rewrites = require('grunt-connect-rewrite/lib/utils').rewriteRequest;

	var mountFolder = function (connect, dir) {
		return connect.static(require('path').resolve(dir));
	};

	var mountPHP = function (dir, options) {
		options = options || {
			'.php': 'php-cgi',
			'env': {
				'PHPRC': process.cwd()+'/node_modules/hazdev-template/src/conf/php.ini'
			}
		};
		return gateway(require('path').resolve(dir), options);
	};

	var rewriteRules = (function () {
		return [
			// Template
			{from: '^/theme/(.*)$', to: '/hazdev-template/src/htdocs/$1'},
			// Data files
			{from: '^' + config.DATA_URL + '/(.*)$', to: '/$1'}
		];
	})();

	return {
		options: {
			debug: true,
			hostname: '*',
			open: true,
			port: 8000,
			useAvailablePort: true
		},

		rules: rewriteRules,

		development: {
			options: {
				base: ['src/htdocs', '.tmp', 'node_modules', config.DATA_DIR],
				livereload: true,
				middleware: function (connect, options) {
					var bases = options.base,
					    i = 0, len = null,
					    base = null, handlers = [];

					if (!require('util').isArray(bases)) {
						bases = [bases];
					}

					for (i = 0, len = bases.length; i < len; i++) {
						base = bases[i];
						handlers.push(mountPHP(base));
						handlers.push(mountFolder(connect, base));
					}

					// check handlers, then rewrite, then check handlers again
					return [].concat(handlers, [rewrites], handlers);
				}
			}
		},

		production: {
			options: {
				base: ['dist/htdocs']
			}
		}
	};

})();
