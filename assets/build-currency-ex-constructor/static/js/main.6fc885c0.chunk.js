(window["webpackJsonpcurrency-ex-constructor"]=window["webpackJsonpcurrency-ex-constructor"]||[]).push([[0],{10:function(e,t,a){e.exports=a(17)},15:function(e,t,a){},16:function(e,t,a){},17:function(e,t,a){"use strict";a.r(t);var n=a(0),r=a.n(n),c=a(8),s=a.n(c),l=(a(15),a(9)),i=a(1),o=a(2),u=a(4),p=a(3),h=a(5),y=a(6),m=a.n(y),g=function(e){function t(){return Object(i.a)(this,t),Object(u.a)(this,Object(p.a)(t).apply(this,arguments))}return Object(h.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e="";this.props.availableCurrency.includes(this.props.currency.cc)&&(e="checked");var t=this.props.currency.cc;return r.a.createElement("div",{className:"MxCurrencyItem"},r.a.createElement("input",{type:"checkbox",checked:e,onChange:this.props.markCurrency.bind(this,t)}),r.a.createElement("strong",null,this.props.currency.cc),r.a.createElement("span",null,this.props.currency.txt))}}]),t}(n.Component),d=function(e){function t(){return Object(i.a)(this,t),Object(u.a)(this,Object(p.a)(t).apply(this,arguments))}return Object(h.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=parseFloat(100.0108*this.props.currency.rate/100).toFixed(3),t=parseFloat(101.2506*this.props.currency.rate/100).toFixed(3),a={border:"none"};return r.a.createElement("tr",null,r.a.createElement("td",{style:a},r.a.createElement("strong",null,this.props.currency.cc)),r.a.createElement("td",{style:a},e),r.a.createElement("td",{style:a},t),r.a.createElement("td",{style:a},parseFloat(this.props.currency.rate).toFixed(4)))}}]),t}(n.Component),v=function(e){function t(){return Object(i.a)(this,t),Object(u.a)(this,Object(p.a)(t).apply(this,arguments))}return Object(h.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this,t=this.props.currencies.map((function(t){return!e.props.availableCurrency.includes(t.cc)||r.a.createElement(d,{key:m()(),currency:t})})),a="none";"#ffffff"===this.props.cssStyles.bgc&&(a="1px solid #333333");var n,c,s={backgroundColor:this.props.cssStyles.bgc,maxWidth:this.props.cssStyles.maxWidth,textAlign:"center",borderRadius:"4px",paddingBottom:"1px",border:a,fontFamily:'-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif',fontSize:"14px",color:"inherit"},l={border:"none",textAlign:"center"},i=this.props.appLanguage,o="";return this.props.translate.filter((function(e){return e.lang===i&&(n=e.buy,c=e.sell,o=e.ukr),!0})),r.a.createElement("div",{className:"MxCurrencyResultBox",style:s},"\u041a\u0443\u0440\u0441 \u0432\u0430\u043b\u044e\u0442 ",r.a.createElement("span",null,"\u0432 ",o,", ",this.props.date),r.a.createElement("div",{style:{backgroundColor:"#ffffff",margin:"4px",borderRadius:"4px"}},r.a.createElement("table",{style:{width:"100%",fontSize:"14px",textAlign:"center"}},r.a.createElement("tbody",null,r.a.createElement("tr",null,r.a.createElement("th",{style:l}),r.a.createElement("th",{style:l},n),r.a.createElement("th",{style:l},c),r.a.createElement("th",{style:l},"\u041d\u0430\u0446\u0411\u0430\u043d\u043a")),t))))}}]),t}(n.Component),b=function(e){function t(){var e,a;Object(i.a)(this,t);for(var n=arguments.length,r=new Array(n),c=0;c<n;c++)r[c]=arguments[c];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={BGcolors:["#dde9cb","#f7e4e4","#a9a9f3","#ffffff"]},a}return Object(h.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this,t=this.state.BGcolors.map((function(t,a){var n=!1;t===e.props.cssStyles.bgc&&(n=!0);var c="none";"#ffffff"===t&&(c="1px solid #333333");var s={background:e.state.BGcolors[a],border:c};return r.a.createElement("div",{key:m()(),className:"MxCurrencyBlockColorItem"},r.a.createElement("span",{style:s}),r.a.createElement("input",{type:"radio",name:"bgcCurrencyBox",className:"MxCurrencyColorInput",value:e.state.BGcolors[a],onChange:e.props.changeBGC.bind(e),checked:n}))}));return r.a.createElement("div",{className:"MxCurrencyBlockColor"},t)}}]),t}(n.Component),f=function(e){function t(){var e,a;Object(i.a)(this,t);for(var n=arguments.length,r=new Array(n),c=0;c<n;c++)r[c]=arguments[c];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={boxSize:["100%","600px","300px"]},a}return Object(h.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this,t=this.state.boxSize.map((function(t,a){var n=!1;return t===e.props.cssStyles.maxWidth&&(n=!0),r.a.createElement("div",{key:m()(),className:"MxCurrencyBlockSizeItem"},r.a.createElement("input",{type:"radio",name:"sizeCurrencyBox",className:"MxCurrencySizeInput",value:e.state.boxSize[a],onChange:e.props.changeBoxSize.bind(e),checked:n}),r.a.createElement("span",null,e.state.boxSize[a]))}));return r.a.createElement("div",{className:"MxCurrencyBlockColor"},t)}}]),t}(n.Component),x=function(e){function t(){return Object(i.a)(this,t),Object(u.a)(this,Object(p.a)(t).apply(this,arguments))}return Object(h.a)(t,e),Object(o.a)(t,[{key:"mxCreateShortcode",value:function(){var e=this.props.availableCurrency.join(","),t=this.props.cssStyles.maxWidth;return'[mx_currency_exchange_box data-currencies="'+e+'" data-color="'+this.props.cssStyles.bgc+'" data-maxwidth="'+t+'" data-lang="'+this.props.appLanguage+'"]'}},{key:"render",value:function(){return r.a.createElement("div",{className:"CurrencyCodeSnippet",style:{display:"inline-block",background:"#fafafa",padding:"10px 20px"}},r.a.createElement("span",null,this.mxCreateShortcode()))}}]),t}(n.Component),C=function(e){function t(){var e,a;Object(i.a)(this,t);for(var n=arguments.length,r=new Array(n),c=0;c<n;c++)r[c]=arguments[c];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={languages:["ru","ua"]},a}return Object(h.a)(t,e),Object(o.a)(t,[{key:"render",value:function(){var e=this,t=this.state.languages.map((function(t,a){var n=!1;return t===e.props.appLanguage&&(n=!0),r.a.createElement("div",{key:m()(),className:"MxCurrencyBlockLangItem"},r.a.createElement("input",{type:"radio",name:"langCurrencyBox",className:"MxCurrencyLangInput",value:e.state.languages[a],onChange:e.props.changeBoxLang.bind(e),checked:n}),r.a.createElement("span",null,e.state.languages[a]))}));return r.a.createElement("div",{className:"MxCurrencyBlockLanguage"},t)}}]),t}(n.Component),E=(a(16),function(e){function t(){var e,a;Object(i.a)(this,t);for(var n=arguments.length,r=new Array(n),c=0;c<n;c++)r[c]=arguments[c];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={currenciesNB:[],availableCurrency:["RUB","EUR","USD"],cssStyles:{bgc:"#dde9cb",maxWidth:"600px"},date:"",translate:[{lang:"ru",buy:"\u041f\u043e\u043a\u0443\u043f\u043a\u0430",sell:"\u041f\u0440\u043e\u0434\u0430\u0436\u0430",ukr:"\u0423\u043a\u0440\u0430\u0438\u043d\u0435"},{lang:"ua",buy:"\u041a\u0443\u043f\u0456\u0432\u043b\u044f",sell:"\u041f\u0440\u043e\u0434\u0430\u0436",ukr:"\u0423\u043a\u0440\u0430\u0457\u043d\u0456"}],appLanguage:"ru"},a.markCurrency=function(e){if(a.state.availableCurrency.includes(e)){var t=a.state.availableCurrency,n=e,r=t.indexOf(n);-1!==r&&t.splice(r,1),a.setState({availableCurrency:t})}else a.setState({availableCurrency:[].concat(Object(l.a)(a.state.availableCurrency),[e])})},a.changeBGC=function(e){var t=a.state.cssStyles;t.bgc=e.target.value,a.setState({cssStyles:t})},a.changeBoxSize=function(e){var t=a.state.cssStyles;t.maxWidth=e.target.value,a.setState({cssStyles:t})},a.changeBoxLang=function(e){var t=e.target.value;a.setState({appLanguage:t})},a}return Object(h.a)(t,e),Object(o.a)(t,[{key:"UNSAFE_componentWillMount",value:function(){var e=this,t=new Date,a=t.getDate()<10?"0"+t.getDate():t.getDate(),n=t.getMonth()+1<10?"0"+(t.getMonth()+1):t.getMonth()+1,r=t.getFullYear()+""+n+a;fetch("https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+r+"&json").then((function(e){return e.json()})).then((function(t){var a=t;if(t.length<3){var n=localStorage.getItem("reservCurrenciesNB"),r=JSON.parse(n);null===n&&(r=[]),e.setState({currenciesNB:r})}else e.setState({currenciesNB:a}),localStorage.setItem("reservCurrenciesNB",JSON.stringify(a))})).catch((function(t){var a=localStorage.getItem("reservCurrenciesNB"),n=JSON.parse(a);null===a&&(n=[]),e.setState({currenciesNB:n})}));var c=t.getDate()+"."+(t.getMonth()+1)+"."+t.getFullYear();this.setState({date:c}),console.log("currency exchange v. - 01.02.2020")}},{key:"render",value:function(){var e=this,t=this.state.currenciesNB.map((function(t){return r.a.createElement(g,{key:m()(),currency:t,availableCurrency:e.state.availableCurrency,markCurrency:e.markCurrency})}));return r.a.createElement("div",{className:"MxCurrencyExWrap"},r.a.createElement("div",{className:"MxCurrencyExListOfCurrency"},r.a.createElement("h4",null,"\u0412\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u0432\u0430\u043b\u044e\u0442\u0443"),r.a.createElement("div",null,t)),r.a.createElement("div",{className:"MxCurrencyBoxColor"},r.a.createElement("h4",null,"\u0412\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u0446\u0432\u0435\u0442 \u0431\u043b\u043e\u043a\u0430"),r.a.createElement("div",null,r.a.createElement(b,{changeBGC:this.changeBGC,cssStyles:this.state.cssStyles}))),r.a.createElement("div",{className:"MxCurrencyBoxSize"},r.a.createElement("h4",null,"\u0412\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u0440\u0430\u0437\u043c\u0435\u0440 \u0431\u043b\u043e\u043a\u0430"),r.a.createElement("div",null,r.a.createElement(f,{changeBoxSize:this.changeBoxSize,cssStyles:this.state.cssStyles}))),r.a.createElement("div",{className:"MxCurrencyBoxSize"},r.a.createElement("h4",null,"\u0412\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u044f\u0437\u044b\u043a"),r.a.createElement("div",null,r.a.createElement(C,{changeBoxLang:this.changeBoxLang,appLanguage:this.state.appLanguage}))),r.a.createElement("div",{className:"MxCurrencyResult"},r.a.createElement("h4",null,"\u0420\u0435\u0437\u0443\u043b\u044c\u0442\u0430\u0442"),r.a.createElement("div",null,r.a.createElement(v,{translate:this.state.translate,appLanguage:this.state.appLanguage,date:this.state.date,cssStyles:this.state.cssStyles,currencies:this.state.currenciesNB,availableCurrency:this.state.availableCurrency}))),r.a.createElement("div",{className:"MxCurrencyShortcode"},r.a.createElement("h4",null,"\u0428\u043e\u0440\u0442\u043a\u043e\u0434 \u0434\u043b\u044f \u0432\u0441\u0442\u0430\u0432\u043a\u0438"),r.a.createElement("p",null,"\u0412\u0441\u0442\u0430\u0432\u044c\u0442\u0435 \u044d\u0442\u043e\u0442 \u0448\u043e\u0440\u0442\u043a\u043e\u0434 \u043d\u0430 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0443 \u0441\u0430\u0439\u0442\u0430, \u0433\u0434\u0435 \u0434\u043e\u043b\u0436\u0435\u043d \u043e\u0442\u043e\u0431\u0440\u0430\u0436\u0430\u0442\u044c\u0441\u044f \u0431\u043b\u043e\u043a \u043a\u0443\u0440\u0441\u0430 \u0432\u0430\u043b\u044e\u0442."),r.a.createElement("div",null,r.a.createElement(x,{appLanguage:this.state.appLanguage,availableCurrency:this.state.availableCurrency,cssStyles:this.state.cssStyles}))))}}]),t}(n.Component));Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));s.a.render(r.a.createElement(E,null),document.getElementById("mxRootCurrency")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then((function(e){e.unregister()}))}},[[10,1,2]]]);
//# sourceMappingURL=main.6f1b6b26.chunk.js.map