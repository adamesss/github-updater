# GitHub Updater
Contributors: afragen, garyj, scarstens, limikael
Donate link: http://thefragens.com/github-updater-donate
Tags: plugin, theme, language pack, updater, remote install
Requires at least: 4.0
Tested up to: 4.7
Stable tag: master
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description

This plugin was designed to simply update any GitHub hosted WordPress plugin or theme. Currently, plugins or themes hosted on GitHub, Bitbucket, or GitLab are also supported. Additionally, self-hosted installations of GitHub or GitLab are supported. It also allows for remote installation of plugins or themes into WordPress.

Your plugin or theme **must** contain a header in the style.css header or in the plugin's header denoting the location on GitHub. The format is as follows.

`GitHub Plugin URI: afragen/github-updater`

`GitHub Plugin URI: https://github.com/afragen/github-updater`

or

`GitHub Theme URI: afragen/test-child`

`GitHub Theme URI: https://github.com/afragen/test-child`

...where the above URI leads to the __owner/repository__ of your theme or plugin. The URI may be in the format `https://github.com/<owner>/<repo>` or the short format `<owner>/<repo>`. You do not need both. Only one Plugin or Theme URI is required. You **must not** include any extensions like `.git`.

The following headers are available for use depending upon your hosting source.

### GitHub
* GitHub Plugin URI
* GitHub Theme URI
* GitHub Branch
* GitHub Enterprise
* GitHub Languages

###Bitbucket
* Bitbucket Plugin URI
* Bitbucket Theme URI
* Bitbucket Branch
* Bitbucket Languages

###GitLab
* GitLab Plugin URI
* GitLab Theme URI
* GitLab Branch
* GitLab Enterprise
* GitLab CE
* GitLab Languages
* GitLab CI Job

[Comprehensive information regarding GitHub Updater](https://afragen.github.io/github-updater) is available.

## Slack

We now have a [Slack team for GitHub Updater](https://github-updater.slack.com). Please ping me for an invite.
