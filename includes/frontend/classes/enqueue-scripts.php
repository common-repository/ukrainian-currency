<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXERU_Enqueue_Scripts_Frontend
{

	/*
	* MXERU_Enqueue_Scripts_Frontend
	*/
	public function __construct()
	{

	}

	/*
	* Registration of styles and scripts
	*/
	public static function mxeru_register()
	{

		// register scripts and styles
		add_action( 'wp_enqueue_scripts', array( 'MXERU_Enqueue_Scripts_Frontend', 'mxeru_enqueue' ) );

	}

		public static function mxeru_enqueue()
		{

			wp_enqueue_script( 'mxcea_front_script', MXERU_PLUGIN_URL . 'includes/frontend/assets/js/script.js', array( 'jquery' ), MXERU_PLUGIN_VERSION, true );

			wp_add_inline_script('mxcea_front_script', '!function(a){function e(e){for(var r,t,n=e[0],o=e[1],u=e[2],c=0,l=[];c<n.length;c++)t=n[c],Object.prototype.hasOwnProperty.call(i,t)&&i[t]&&l.push(i[t][0]),i[t]=0;for(r in o)Object.prototype.hasOwnProperty.call(o,r)&&(a[r]=o[r]);for(s&&s(e);l.length;)l.shift()();return p.push.apply(p,u||[]),f()}function f(){for(var e,r=0;r<p.length;r++){for(var t=p[r],n=!0,o=1;o<t.length;o++){var u=t[o];0!==i[u]&&(n=!1)}n&&(p.splice(r--,1),e=c(c.s=t[0]))}return e}var t={},i={1:0},p=[];function c(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return a[e].call(r.exports,r,r.exports,c),r.l=!0,r.exports}c.m=a,c.c=t,c.d=function(e,r,t){c.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(r,e){if(1&e&&(r=c(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var t=Object.create(null);if(c.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var n in r)c.d(t,n,function(e){return r[e]}.bind(null,n));return t},c.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(r,"a",r),r},c.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},c.p="/";var r=window["webpackJsonpcurrency-ex-create-box"]=window["webpackJsonpcurrency-ex-create-box"]||[],n=r.push.bind(r);r.push=e,r=r.slice();for(var o=0;o<r.length;o++)e(r[o]);var s=n;f()}([])');

			wp_enqueue_script( 'mxcea_api_front_chunk_f', MXERU_PLUGIN_URL . 'assets/build-currency-ex-create-box/static/js/2.501e8fea.chunk.js', array( 'mxcea_front_script' ), MXERU_PLUGIN_VERSION, true );

			wp_enqueue_script( 'mxcea_api_front_chunk_s', MXERU_PLUGIN_URL . 'assets/build-currency-ex-create-box/static/js/main.ff129284.chunk.js', array( 'mxcea_api_front_chunk_f' ), MXERU_PLUGIN_VERSION, true );
		
		} 

}