<?php

namespace ${cursor};

use ;

/**
 * ${name}
 * =====
 * 
 * 
 * @author ${user}
 * @copyright Copyright (c) ${date?date?string("yyyy")}, ${user}
 * @package 
 * <#if parentPresenter != "">@uses ${parentPresenter}</#if>
 * @license 
 * @version 0.0, ${date}
 */
class ${name} <#if parentPresenter != "">extends ${parentPresenter} </#if>
{
	<#if generateStartup>
	/** @see Nette\Application\Presenter#startup() */
	protected function startup()
	{
		parent::startup();
	}
	</#if>

<#list actions as action>
	<#if action.action>
	public function action${action.name?cap_first}()
	{
		
	}
	</#if>
	
	<#if action.render>
	public function render${action.name?cap_first}()
	{
		
	}
	</#if>
</#list>


	/*
	 * SIGNÁLY
	 ************************************************************/

	protected public function handle()
	{
		
	}


	/*
	 * KOMPONENTY
	 ************************************************************/

	protected public function createComponent($name)
	{
		
	}

}