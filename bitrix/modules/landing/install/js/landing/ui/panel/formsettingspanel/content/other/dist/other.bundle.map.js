{"version":3,"sources":["other.bundle.js"],"names":["this","BX","Landing","Ui","Panel","Formsettingspanel","exports","ui_designTokens","landing_ui_card_headercard","landing_loc","landing_ui_form_formsettingsform","landing_ui_field_textfield","landing_ui_panel_basepresetpanel","main_core_events","landing_ui_field_basefield","ui_entitySelector","landing_pageobject","main_core","landing_ui_card_basecard","UserSelectorField","_BaseField","babelHelpers","inherits","options","_this","classCallCheck","possibleConstructorReturn","getPrototypeOf","call","Dom","removeClass","input","getTagSelector","renderTo","createClass","key","value","_this2","cache","remember","root","PageObject","getRootWindow","UI","EntitySelector","TagSelector","id","dialogOptions","entities","activeUsers","preselectedItems","events","ItemOnSelect","emit","skipPrepare","ItemOnDeselect","getValue","getDialog","getSelectedItems","map","item","BaseField","_templateObject","ownKeys","object","enumerableOnly","keys","Object","getOwnPropertySymbols","symbols","filter","sym","getOwnPropertyDescriptor","enumerable","push","apply","_objectSpread","target","i","arguments","length","source","forEach","defineProperty","getOwnPropertyDescriptors","defineProperties","Other","_ContentWrapper","setEventNamespace","header","HeaderCard","title","Loc","getMessage","otherForm","FormSettingsForm","description","fields","getNameField","getUserSelectorField","getCheckWorkTimeField","getLanguageField","getUseSignField","addItem","idCard","BaseCard","style","getLayout","padding","margin","formOptions","append","Tag","render","taggedTemplateLiteral","getBody","canRemoveCopyrights","dictionary","sign","canRemove","TextField","selector","textOnly","content","name","_this3","Field","Checkbox","data","useSign","items","html","concat","createCopyRight","compact","_this4","responsible","users","reduce","acc","Type","isStringFilled","isNumber","_this5","checkWorkTime","_this6","Dropdown","languages","language","valueReducer","includes","onChange","event","checkbox","setValue","restriction","helper","evalGlobal","Reflection","getClass","isFunction","getData","ContentWrapper","default","Content","Card","Form","Event"],"mappings":"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","file":"other.bundle.map.js"}