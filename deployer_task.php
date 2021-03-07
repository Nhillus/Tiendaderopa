<?php
namespace Deployer;
desc('Symlink Laravel public To public_html');
task('app:symlink_public_html', function () {
run('ln -s /home/lebuurrf/Lebuya/public /home/lebuurrf/public_html');
});