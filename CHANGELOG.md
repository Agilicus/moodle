# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

### [1.12.2](https://git.agilicus.com/applications/iomad/compare/v1.12.1...v1.12.2) (2020-06-04)

### [1.12.1](https://git.agilicus.com/applications/iomad/compare/v1.12.0...v1.12.1) (2020-05-23)


### Bug Fixes

* revert to moosh upstream from our branch for cockroachdb ([73c417b](https://git.agilicus.com/applications/iomad/commit/73c417b5b2c2abf727cfd35c01c23e712ff3082e)), closes [/github.com/tmuras/moosh/pull/314#event-3367184851](https://git.agilicus.com/applications//github.com/tmuras/moosh/pull/314/issues/event-3367184851)

## [1.12.0](https://git.agilicus.com/applications/iomad/compare/v1.11.0...v1.12.0) (2020-05-20)


### Features

* allow custom authentication instructions per company in iomad ([8c39354](https://git.agilicus.com/applications/iomad/commit/8c393546f0b30464085de24a8ff4529fc979d279))

## [1.11.0](https://git.agilicus.com/applications/iomad/compare/v1.10.1...v1.11.0) (2020-05-14)


### Features

* enable multiembed plugin ([36cd775](https://git.agilicus.com/applications/iomad/commit/36cd775ad6662c7571dc55e6b3388edc429b7809))

### [1.10.1](https://git.agilicus.com/applications/iomad/compare/v1.10.0...v1.10.1) (2020-05-14)


### Bug Fixes

* all paths now commit transactions ([de345d1](https://git.agilicus.com/applications/iomad/commit/de345d1c8bca9f62b13dfcd36d02c5102c8373af))
* now cleans all dangling cached files (css and js), from the three tables: mdl_tool_objectfs_objects, mdl_hvp_libraries_cachedassets, mdl_files ([381d27b](https://git.agilicus.com/applications/iomad/commit/381d27b212cca4d9854ef601bb22ecc56ec4e4e2))
* now cleans all dangling cached files (css and js), from the three tables: mdl_tool_objectfs_objects, mdl_hvp_libraries_cachedassets, mdl_files ([1b8915a](https://git.agilicus.com/applications/iomad/commit/1b8915a563e8bfc3fc1d3bfab18bbebdf103971c))

## [1.10.0](https://git.agilicus.com/applications/iomad/compare/v1.9.3...v1.10.0) (2020-05-14)


### Features

* add moosh shell ([464e4fc](https://git.agilicus.com/applications/iomad/commit/464e4fcf01c12957d8007a4c8c45c779f816e462))

### [1.9.3](https://git.agilicus.com/applications/iomad/compare/v1.9.2...v1.9.3) (2020-05-13)


### Bug Fixes

* enable read only sessions is boolean, not string ([ee3de1e](https://git.agilicus.com/applications/iomad/commit/ee3de1e09febe8e9789569eeda5e495ccf8af3fc))
* reduce debug level (debugging local use only) ([bbb0091](https://git.agilicus.com/applications/iomad/commit/bbb0091d1820c1f8ed204d939202ebe2730a25bd))

### [1.9.2](https://git.agilicus.com/applications/iomad/compare/v1.9.1...v1.9.2) (2020-05-13)


### Bug Fixes

* correct session w/ read-only and mobile-app ([f4e6a12](https://git.agilicus.com/applications/iomad/commit/f4e6a12414abf595567c77f89fc8d2ded659cec7))

### [1.9.1](https://git.agilicus.com/applications/iomad/compare/v1.9.0...v1.9.1) (2020-05-12)


### Bug Fixes

* redis connect was passing a read_interval as 1000x what it meant ([b2a9f87](https://git.agilicus.com/applications/iomad/commit/b2a9f87fdb5b37ac7e24d9c3980cd8899689f669))
* resolve Error on cron run in cache/classes/helper.php ([bc86ad3](https://git.agilicus.com/applications/iomad/commit/bc86ad38bc3f243c4dd46e18f7c201e79f8ba655))

## [1.9.0](https://git.agilicus.com/applications/iomad/compare/v1.8.0...v1.9.0) (2020-05-11)


### Features

* enable use of tame issuer ([b710a27](https://git.agilicus.com/applications/iomad/commit/b710a27e3e6a52be30d43f22046cd4c5d113e2e9))

## [1.8.0](https://git.agilicus.com/applications/iomad/compare/v1.7.2...v1.8.0) (2020-05-10)


### Features

* pre-generate theme cache, remove extra logs from cron ([29dc354](https://git.agilicus.com/applications/iomad/commit/29dc354c8825b835895d45a2dedb9123be4c997f))

### [1.7.2](https://git.agilicus.com/applications/iomad/compare/v1.7.1...v1.7.2) (2020-05-09)


### Bug Fixes

* add write perm to /var/lib/php/sessions ([0f2df97](https://git.agilicus.com/applications/iomad/commit/0f2df976a7a2f9a4948dcf9d109f8b57952277d1))

### [1.7.1](https://git.agilicus.com/applications/iomad/compare/v1.7.0...v1.7.1) (2020-05-08)

## [1.7.0](https://git.agilicus.com/applications/iomad/compare/v1.6.2...v1.7.0) (2020-05-08)


### Features

* enable web analytics ([47f542d](https://git.agilicus.com/applications/iomad/commit/47f542d39e5b3327e17341ac61c55c414abd2353))

### [1.6.2](https://git.agilicus.com/applications/iomad/compare/v1.6.1...v1.6.2) (2020-05-08)


### Bug Fixes

* correct incorrect s3 config ([cc012b4](https://git.agilicus.com/applications/iomad/commit/cc012b4a9ad4a053a84bfd6ad60d12dad2a160ce))

### [1.6.1](https://git.agilicus.com/applications/iomad/compare/v1.6.0...v1.6.1) (2020-05-08)

## [1.6.0](https://git.agilicus.com/applications/iomad/compare/v1.5.2...v1.6.0) (2020-05-08)


### Features

* enable xdebug debugging ([fc93361](https://git.agilicus.com/applications/iomad/commit/fc93361d5c1e77b1234c52eca374dc08fea4c8d2))

### [1.5.2](https://git.agilicus.com/applications/iomad/compare/v1.5.1...v1.5.2) (2020-05-07)


### Bug Fixes

* s3 settings overidden in config ([3e7d19d](https://git.agilicus.com/applications/iomad/commit/3e7d19d187173f619392f050b822604aa89177d6))

### [1.5.1](https://git.agilicus.com/applications/iomad/compare/v1.5.0...v1.5.1) (2020-05-06)


### Bug Fixes

* add redis for locks, use iowat for objectfs push ([c1e4db2](https://git.agilicus.com/applications/iomad/commit/c1e4db2da93f3178c80fca99aa850541b4feb331))
* mkdir local-cache ([1a00332](https://git.agilicus.com/applications/iomad/commit/1a00332e06eee4130edb7101b675a4e6d9e65cfe))
* move objectfs to own cron function ([7254a45](https://git.agilicus.com/applications/iomad/commit/7254a45745113c8df8574e486bdb92172d32f261))

## [1.5.0](https://git.agilicus.com/applications/iomad/compare/v1.4.0...v1.5.0) (2020-05-06)


### Features

* add developer niceties for local running ([f9ceef3](https://git.agilicus.com/applications/iomad/commit/f9ceef378381e20eecf9b0753bcbbf991a3e41f7))

## [1.4.0](https://git.agilicus.com/applications/iomad/compare/v1.3.0...v1.4.0) (2020-05-06)


### Features

* move cron into main container ([46ea579](https://git.agilicus.com/applications/iomad/commit/46ea579d3bbfcd8cb1dd00ce2135a529e43506b1))

## 1.1.0 (2020-05-02)


### Features

* add /health.php endpoint for dedicated health check ([79f7724](https://git.agilicus.com/applications/iomad/commit/79f7724ca9a39c0754ebd592ffa6c8c300941f57))
* bump upstream container to get gzip of text content ([7d838ea](https://git.agilicus.com/applications/iomad/commit/7d838eace3857d25d09c7981b31de9e9c79d5180))


### Bug Fixes

* always editing the current hosting company ([8fe93df](https://git.agilicus.com/applications/iomad/commit/8fe93dffc26a83099cdf9150df2fc54d31b58a26))
* bump base container to get remote_addr logging, request_id correct ([d226a71](https://git.agilicus.com/applications/iomad/commit/d226a7155f0d962e509104ee2797df5e47d84aa4))
* bump php base to get pm.start_servers fix ([9c0c42c](https://git.agilicus.com/applications/iomad/commit/9c0c42c83af29b268dfc9cd7c356cb4f6140524e))
* bump php upstream to v0.0.4 to enable prometheus exporter ([99d2de0](https://git.agilicus.com/applications/iomad/commit/99d2de0f548a08a6cbe31c63be921a5addbf5346))
* change to using single set with explicit expiry ([2f21aed](https://git.agilicus.com/applications/iomad/commit/2f21aed75a7dfb091cb16d5e15dde8f69d8fefdf))
* enable gzip_vary ([4795877](https://git.agilicus.com/applications/iomad/commit/4795877fee57baa5dc672710ce7fdf36be4289b9))
* enable sendfile, cached h5p libs ([60586b5](https://git.agilicus.com/applications/iomad/commit/60586b5248d7ad58b20d10fe30b65f5157a57e91))
* fix course completion report ([de78f0b](https://git.agilicus.com/applications/iomad/commit/de78f0be27aaec34b3a506fad0dcf4d7eab535c5))
* incorrect spelling on CfG ([de61683](https://git.agilicus.com/applications/iomad/commit/de61683aae4076cca6d4bb9d44c91ae365a5e4fd))
* longer selector on css to block sign in cookie warning ([65acc93](https://git.agilicus.com/applications/iomad/commit/65acc93d6c97b6217944aca73683543cfab6c5c0))
* make cache admin page viewable ([3d7aa2b](https://git.agilicus.com/applications/iomad/commit/3d7aa2bb5d65349d85b2edf133bb110180a08eb1))
* oauth2 idp's lister is now company aware rather than the login page filtering idps directly ([6724226](https://git.agilicus.com/applications/iomad/commit/6724226495db0dc473f9d6495194150bfb151a56))
* prevent instructors from editing non-owned corses ([248a8b3](https://git.agilicus.com/applications/iomad/commit/248a8b327ad45c0177de4651dd34cdb969be57fd))
* use DB locking instead of file locking, fix certificate sql querry ([0414a56](https://git.agilicus.com/applications/iomad/commit/0414a56b4f723db00c5c204daea426f1fd794d78))
* use smaller session lock timeouts ([6dff613](https://git.agilicus.com/applications/iomad/commit/6dff6137f03595069f6d1dc58dbaf9beb2beefb1))
* will error on page edits now ([2fbb3c4](https://git.agilicus.com/applications/iomad/commit/2fbb3c46adfbcee3c8c20ef887ad5daaf14868fb))

### [1.2.7](https://git.agilicus.com/applications/iomad/compare/v1.2.6...v1.2.7) (2020-05-01)


### Bug Fixes

* always editing the current hosting company ([6a4d0a0](https://git.agilicus.com/applications/iomad/commit/6a4d0a0c8ef72d3b628ada51fa2421fed2444ea2))

### [1.2.6](https://git.agilicus.com/applications/iomad/compare/v1.2.5...v1.2.6) (2020-05-01)

### [1.2.5](https://git.agilicus.com/applications/iomad/compare/v1.2.4...v1.2.5) (2020-04-28)


### Bug Fixes

* prevent instructors from editing non-owned corses ([9fa0a24](https://git.agilicus.com/applications/iomad/commit/9fa0a246986fc822aa77eb877eb9554ba50a963a))

### [1.2.4](https://git.agilicus.com/applications/iomad/compare/v1.2.3...v1.2.4) (2020-04-27)


### Bug Fixes

* bump base container to get remote_addr logging, request_id correct ([9f722c0](https://git.agilicus.com/applications/iomad/commit/9f722c03ee1a5507f55bdac7a4990d286ef2be15))

### [1.2.3](https://git.agilicus.com/applications/iomad/compare/v1.2.2...v1.2.3) (2020-04-24)


### Bug Fixes

* enable sendfile, cached h5p libs ([2a89ca4](https://git.agilicus.com/applications/iomad/commit/2a89ca464f57bfd3b5fcf82fbad2436fccd5d5e5))

### [1.2.2](https://git.agilicus.com/applications/iomad/compare/v1.2.1...v1.2.2) (2020-04-24)


### Bug Fixes

* change to using single set with explicit expiry ([1a9b519](https://git.agilicus.com/applications/iomad/commit/1a9b51964b23cfdf5dfdcd6e28953d4501b1e39e))
* use smaller session lock timeouts ([0e57ef7](https://git.agilicus.com/applications/iomad/commit/0e57ef7f9edebf2c64fa97cef4b36e5f70942a43))

### [1.2.1](https://git.agilicus.com/applications/iomad/compare/v1.2.0...v1.2.1) (2020-04-23)


### Bug Fixes

* longer selector on css to block sign in cookie warning ([d4d6743](https://git.agilicus.com/applications/iomad/commit/d4d67435471731bcab49f670688979e74e68dceb))

## [1.2.0](https://git.agilicus.com/applications/iomad/compare/v1.1.10...v1.2.0) (2020-04-22)


### Features

* add /health.php endpoint for dedicated health check ([47be972](https://git.agilicus.com/applications/iomad/commit/47be972e4924087a854a88695c3a666c0b1d116e))

### [1.1.10](https://git.agilicus.com/applications/iomad/compare/v1.1.9...v1.1.10) (2020-04-21)


### Bug Fixes

* bump php upstream to v0.0.4 to enable prometheus exporter ([5af8e3d](https://git.agilicus.com/applications/iomad/commit/5af8e3dc0dbbaf5b75d131c7c25425b42b3d7c48))

### [1.1.9](https://git.agilicus.com/applications/iomad/compare/v1.1.8...v1.1.9) (2020-04-20)


### Bug Fixes

* bump php base to get pm.start_servers fix ([509169e](https://git.agilicus.com/applications/iomad/commit/509169effa6ce3905585e097a0e8101f2c41c318))

### [1.1.8](https://git.agilicus.com/applications/iomad/compare/v1.1.7...v1.1.8) (2020-04-20)


### Bug Fixes

* oauth2 idp's lister is now company aware rather than the login page filtering idps directly ([5a74e96](https://git.agilicus.com/applications/iomad/commit/5a74e96a6a6cff2cbd82090ba1f0306e9fa770a5))

### [1.1.7](https://git.agilicus.com/applications/iomad/compare/v1.1.6...v1.1.7) (2020-04-20)

### [1.1.6](https://git.agilicus.com/applications/iomad/compare/v1.1.5...v1.1.6) (2020-04-19)


### Bug Fixes

* incorrect spelling on CfG ([0330bd8](https://git.agilicus.com/applications/iomad/commit/0330bd87a9a00371bc74eb6f38f9d8e6ef0b4d3b))

### [1.1.5](https://git.agilicus.com/applications/iomad/compare/v1.1.4...v1.1.5) (2020-04-17)


### Bug Fixes

* make cache admin page viewable ([9b1dd1d](https://git.agilicus.com/applications/iomad/commit/9b1dd1da84ac82aff1d47a93dc51892f2639bbe1))
* will error on page edits now ([23472e1](https://git.agilicus.com/applications/iomad/commit/23472e1c426796df4dd478ae609dcac8e19a66e4))

### [1.1.4](https://git.agilicus.com/applications/iomad/compare/v1.1.3...v1.1.4) (2020-04-17)


### Bug Fixes

* use DB locking instead of file locking, fix certificate sql querry ([d4f03d8](https://git.agilicus.com/applications/iomad/commit/d4f03d884cfbd1c19dbdf2457f163240256f6b08))

### [1.1.3](https://git.agilicus.com/applications/iomad/compare/v1.1.2...v1.1.3) (2020-04-16)


### Bug Fixes

* fix course completion report ([472c5d9](https://git.agilicus.com/applications/iomad/commit/472c5d97586f8196380e9365e9b70766b4efe7d6))

### [1.1.2](https://git.agilicus.com/applications/iomad/compare/v1.1.1...v1.1.2) (2020-04-15)

### [1.1.1](https://git.agilicus.com/applications/iomad/compare/v1.1.0...v1.1.1) (2020-04-14)


### Bug Fixes

* always update user's role, plugin installer works now ([535fd22](https://git.agilicus.com/applications/iomad/commit/535fd2276ddea1a99e18b8dd1ee94237c8b34f67))

## [1.1.0](https://git.agilicus.com/applications/iomad/compare/v1.0.1...v1.1.0) (2020-04-12)


### Features

* add missing gs/du/h5p/aspell ([de31112](https://git.agilicus.com/applications/iomad/commit/de31112bd0cfcde85ad5fbba129e1f2683052849))

### 1.0.1 (2020-04-06)

### [0.0.2](https://git.agilicus.com/applications/iomad/compare/v0.0.1...v0.0.2) (2020-04-03)

### [0.0.1](https://git.agilicus.com/applications/iomad/compare/v0.0.0...v0.0.1) (2020-04-01)

### [0.0.1](https://git.agilicus.com/applications/iomad/compare/v0.0.0...v0.0.1) (2020-04-01)

### [0.0.15](https://git.agilicus.com/applications/moodle/compare/v0.0.14...v0.0.15) (2020-03-22)

### [0.0.14](https://git.agilicus.com/applications/moodle/compare/v0.0.13...v0.0.14) (2020-03-10)

### [0.0.13](https://git.agilicus.com/applications/moodle/compare/v0.0.12...v0.0.13) (2020-03-09)

### [0.0.12](https://git.agilicus.com/applications/moodle/compare/v0.0.11...v0.0.12) (2020-03-05)

### [0.0.11](https://git.agilicus.com/applications/moodle/compare/v0.0.10...v0.0.11) (2020-03-04)

### [0.0.10](https://git.agilicus.com/applications/moodle/compare/v0.0.9...v0.0.10) (2020-03-04)

### [0.0.9](https://git.agilicus.com/applications/moodle/compare/v0.0.8...v0.0.9) (2020-02-28)

### [0.0.8](https://git.agilicus.com/applications/moodle/compare/v0.0.7...v0.0.8) (2020-02-27)

### [0.0.7](https://git.agilicus.com/applications/moodle/compare/v0.0.6...v0.0.7) (2020-02-26)

### [0.0.6](https://git.agilicus.com/applications/moodle/compare/v0.0.5...v0.0.6) (2020-02-24)

### [0.0.5](https://git.agilicus.com/applications/moodle/compare/v0.0.4...v0.0.5) (2020-02-24)

### [0.0.4](https://git.agilicus.com/applications/moodle/compare/v0.0.3...v0.0.4) (2020-02-24)

### [0.0.3](https://git.agilicus.com/applications/moodle/compare/v0.0.2...v0.0.3) (2020-02-21)

### [0.0.2](https://git.agilicus.com/applications/moodle/compare/v0.0.1...v0.0.2) (2020-01-27)

### [0.0.1](https://git.agilicus.com/applications/moodle/compare/v0.0.0...v0.0.1) (2020-01-27)
