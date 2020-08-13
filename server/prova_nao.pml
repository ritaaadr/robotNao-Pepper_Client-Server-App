<?xml version="1.0" encoding="UTF-8" ?>
<Package name="prova_nao" format_version="4">
    <Manifest src="manifest.xml" />
    <BehaviorDescriptions>
        <BehaviorDescription name="behavior" src="behavior_1" xar="behavior.xar" />
    </BehaviorDescriptions>
    <Dialogs>
        <Dialog name="ExampleDialog" src="behavior_1/ExampleDialog/ExampleDialog.dlg" />
        <Dialog name="Intro" src="Intro/Intro.dlg" />
    </Dialogs>
    <Resources>
        <File name="status" src="behavior_1/status.txt" />
        <File name="server" src="server.py" />
        <File name="elephant" src="behavior_1/elephant.ogg" />
        <File name="swiftswords_ext" src="behavior_1/swiftswords_ext.mp3" />
    </Resources>
    <Topics>
        <Topic name="ExampleDialog_enu" src="behavior_1/ExampleDialog/ExampleDialog_enu.top" topicName="" language="" />
        <Topic name="Intro_enu" src="Intro/Intro_enu.top" topicName="Intro" language="it_IT" />
    </Topics>
    <IgnoredPaths />
    <Translations auto-fill="en_US">
        <Translation name="translation_en_US" src="translations/translation_en_US.ts" language="en_US" />
    </Translations>
</Package>
