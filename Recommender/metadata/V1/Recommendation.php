<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommendation.proto

namespace GPBMetadata\Google\Cloud\Recommender\V1;

class Recommendation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a95150a30676f6f676c652f636c6f75642f7265636f6d6d656e6465722f76312f7265636f6d6d656e646174696f6e2e70726f746f121b676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76311a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1c676f6f676c652f70726f746f6275662f7374727563742e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f747970652f6d6f6e65792e70726f746f22b8050a0e5265636f6d6d656e646174696f6e120c0a046e616d6518012001280912130a0b6465736372697074696f6e180220012809121b0a137265636f6d6d656e6465725f73756274797065180c2001280912350a116c6173745f726566726573685f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70123b0a0e7072696d6172795f696d7061637418052001280b32232e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e496d70616374123e0a116164646974696f6e616c5f696d7061637418062003280b32232e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e496d7061637412430a07636f6e74656e7418072001280b32322e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e646174696f6e436f6e74656e7412480a0a73746174655f696e666f180a2001280b32342e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e646174696f6e5374617465496e666f120c0a0465746167180b2001280912590a136173736f6369617465645f696e736967687473180e2003280b323c2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e646174696f6e2e496e73696768745265666572656e63651a230a10496e73696768745265666572656e6365120f0a07696e73696768741801200128093a9401ea4190010a297265636f6d6d656e6465722e676f6f676c65617069732e636f6d2f5265636f6d6d656e646174696f6e126370726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f7265636f6d6d656e646572732f7b7265636f6d6d656e6465727d2f7265636f6d6d656e646174696f6e732f7b7265636f6d6d656e646174696f6e7d225e0a155265636f6d6d656e646174696f6e436f6e74656e7412450a106f7065726174696f6e5f67726f75707318022003280b322b2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e4f7065726174696f6e47726f7570224c0a0e4f7065726174696f6e47726f7570123a0a0a6f7065726174696f6e7318012003280b32262e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e4f7065726174696f6e22d7040a094f7065726174696f6e120e0a06616374696f6e18012001280912150a0d7265736f757263655f7479706518022001280912100a087265736f75726365180320012809120c0a047061746818042001280912170a0f736f757263655f7265736f7572636518052001280912130a0b736f757263655f7061746818062001280912270a0576616c756518072001280b32162e676f6f676c652e70726f746f6275662e56616c7565480012420a0d76616c75655f6d617463686572180a2001280b32292e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e56616c75654d6174636865724800124d0a0c706174685f66696c7465727318082003280b32372e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e4f7065726174696f6e2e5061746846696c74657273456e747279125a0a13706174685f76616c75655f6d61746368657273180b2003280b323d2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e4f7065726174696f6e2e5061746856616c75654d61746368657273456e7472791a4a0a105061746846696c74657273456e747279120b0a036b657918012001280912250a0576616c756518022001280b32162e676f6f676c652e70726f746f6275662e56616c75653a0238011a630a165061746856616c75654d61746368657273456e747279120b0a036b657918012001280912380a0576616c756518022001280b32292e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e56616c75654d6174636865723a023801420c0a0a706174685f76616c7565223a0a0c56616c75654d61746368657212190a0f6d6174636865735f7061747465726e1801200128094800420f0a0d6d617463685f76617269616e74225f0a0e436f737450726f6a656374696f6e12200a04636f737418012001280b32122e676f6f676c652e747970652e4d6f6e6579122b0a086475726174696f6e18022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e2280020a06496d70616374123e0a0863617465676f727918012001280e322c2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e496d706163742e43617465676f727912460a0f636f73745f70726f6a656374696f6e18642001280b322b2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e436f737450726f6a656374696f6e480022600a0843617465676f727912180a1443415445474f52595f554e535045434946494544100012080a04434f53541001120c0a0853454355524954591002120f0a0b504552464f524d414e4345100312110a0d4d414e4147454142494c4954591004420c0a0a70726f6a656374696f6e22de020a175265636f6d6d656e646174696f6e5374617465496e666f12490a05737461746518012001280e323a2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e646174696f6e5374617465496e666f2e5374617465125f0a0e73746174655f6d6574616461746118022003280b32472e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e646174696f6e5374617465496e666f2e53746174654d65746164617461456e7472791a340a1253746174654d65746164617461456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122610a05537461746512150a1153544154455f554e5350454349464945441000120a0a064143544956451001120b0a07434c41494d45441006120d0a095355434345454445441003120a0a064641494c45441004120d0a094449534d4953534544100542ff010a1f636f6d2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e763150015a46676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f7265636f6d6d656e6465722f76313b7265636f6d6d656e646572a2020443524543aa021b476f6f676c652e436c6f75642e5265636f6d6d656e6465722e5631ea416c0a267265636f6d6d656e6465722e676f6f676c65617069732e636f6d2f5265636f6d6d656e646572124270726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f7265636f6d6d656e646572732f7b7265636f6d6d656e6465727d620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

