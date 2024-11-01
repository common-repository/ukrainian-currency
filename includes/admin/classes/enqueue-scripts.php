<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXERU_Enqueue_Scripts
{

	/*
	* MXERU_Enqueue_Scripts
	*/
	public function __construct()
	{

	}

	/*
	* Registration of styles and scripts
	*/
	public static function mxpctyw_register()
	{

		// register scripts and styles
		add_action( 'admin_enqueue_scripts', array( 'MXERU_Enqueue_Scripts', 'mxpctyw_enqueue' ) );

	}

		public static function mxpctyw_enqueue()
		{

			wp_enqueue_style( 'mxcea_admin_style', MXERU_PLUGIN_URL . 'includes/admin/assets/css/style.css', array(), MXERU_PLUGIN_VERSION, 'all' );

			wp_enqueue_style( 'mxcea_admin_style_api', MXERU_PLUGIN_URL . 'assets/build-currency-ex-constructor/static/css/main.c02da41e.chunk.css', array( 'mxcea_admin_style' ), MXERU_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxcea_admin_script', MXERU_PLUGIN_URL . 'includes/admin/assets/js/script.js', array( 'jquery' ), MXERU_PLUGIN_VERSION, true );

			wp_add_inline_script('mxcea_admin_script', '!function(f){function e(e){for(var r,t,n=e[0],o=e[1],u=e[2],c=0,l=[];c<n.length;c++)t=n[c],Object.prototype.hasOwnProperty.call(a,t)&&a[t]&&l.push(a[t][0]),a[t]=0;for(r in o)Object.prototype.hasOwnProperty.call(o,r)&&(f[r]=o[r]);for(s&&s(e);l.length;)l.shift()();return p.push.apply(p,u||[]),i()}function i(){for(var e,r=0;r<p.length;r++){for(var t=p[r],n=!0,o=1;o<t.length;o++){var u=t[o];0!==a[u]&&(n=!1)}n&&(p.splice(r--,1),e=c(c.s=t[0]))}return e}var t={},a={1:0},p=[];function c(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return f[e].call(r.exports,r,r.exports,c),r.l=!0,r.exports}c.m=f,c.c=t,c.d=function(e,r,t){c.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(r,e){if(1&e&&(r=c(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var t=Object.create(null);if(c.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var n in r)c.d(t,n,function(e){return r[e]}.bind(null,n));return t},c.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(r,"a",r),r},c.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},c.p="/";var r=window["webpackJsonpcurrency-ex-constructor"]=window["webpackJsonpcurrency-ex-constructor"]||[],n=r.push.bind(r);r.push=e,r=r.slice();for(var o=0;o<r.length;o++)e(r[o]);var s=n;i()}([])');

			wp_enqueue_script( 'mxcea_api_chunk_f', MXERU_PLUGIN_URL . 'assets/build-currency-ex-constructor/static/js/2.fa3d03d8.chunk.js', array( 'mxcea_admin_script' ), MXERU_PLUGIN_VERSION, true );

			wp_enqueue_script( 'mxcea_api_chunk_s', MXERU_PLUGIN_URL . 'assets/build-currency-ex-constructor/static/js/main.6fc885c0.chunk.js', array( 'mxcea_api_chunk_f' ), MXERU_PLUGIN_VERSION, true );

		}

}