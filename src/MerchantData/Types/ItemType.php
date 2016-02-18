<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $ApplicationData
 * @property \DTS\eBaySDK\MerchantData\Types\AttributeArrayType $AttributeArray
 * @property boolean $AutoPay
 * @property \DTS\eBaySDK\MerchantData\Types\PaymentDetailsType $PaymentDetails
 * @property \DTS\eBaySDK\MerchantData\Types\BiddingDetailsType $BiddingDetails
 * @property boolean $MotorsGermanySearchable
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyItNowPrice
 * @property boolean $CategoryMappingAllowed
 * @property \DTS\eBaySDK\MerchantData\Types\CharityType $Charity
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $Country
 * @property \DTS\eBaySDK\MerchantData\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DTS\eBaySDK\MerchantData\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property \DTS\eBaySDK\MerchantData\Types\DistanceType $Distance
 * @property integer $GiftIcon
 * @property \DTS\eBaySDK\MerchantData\Enums\GiftServicesCodeType[] $GiftServices
 * @property \DTS\eBaySDK\MerchantData\Enums\HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDetailsType $ListingDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $PrimaryCategory
 * @property boolean $PrivateListing
 * @property \DTS\eBaySDK\MerchantData\Types\ProductListingDetailsType $ProductListingDetails
 * @property integer $Quantity
 * @property string $PrivateNotes
 * @property string $RegionID
 * @property boolean $RelistLink
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ReservePrice
 * @property \DTS\eBaySDK\MerchantData\Types\ReviseStatusType $ReviseStatus
 * @property \DateTime $ScheduleTime
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $SecondaryCategory
 * @property \DTS\eBaySDK\MerchantData\Types\CategoryType $FreeAddedCategory
 * @property \DTS\eBaySDK\MerchantData\Types\UserType $Seller
 * @property \DTS\eBaySDK\MerchantData\Types\SellingStatusType $SellingStatus
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType $Site
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\MerchantData\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property \DTS\eBaySDK\MerchantData\Types\VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property integer $WatchCount
 * @property integer $HitCount
 * @property boolean $DisableBuyerRequirements
 * @property \DTS\eBaySDK\MerchantData\Types\BestOfferDetailsType $BestOfferDetails
 * @property boolean $LocationDefaulted
 * @property boolean $ThirdPartyCheckout
 * @property boolean $UseTaxTable
 * @property boolean $BuyerResponsibleForShipping
 * @property string $eBayNotes
 * @property integer $QuestionCount
 * @property boolean $Relisted
 * @property integer $QuantityAvailable
 * @property string $SKU
 * @property boolean $CategoryBasedAttributesPrefill
 * @property \DTS\eBaySDK\MerchantData\Types\SearchDetailsType $SearchDetails
 * @property string $PostalCode
 * @property boolean $ShippingTermsInDescription
 * @property string $SellerInventoryID
 * @property \DTS\eBaySDK\MerchantData\Types\PictureDetailsType $PictureDetails
 * @property integer $DispatchTimeMax
 * @property boolean $SkypeEnabled
 * @property string $SkypeID
 * @property \DTS\eBaySDK\MerchantData\Enums\SkypeContactOptionCodeType[] $SkypeContactOption
 * @property boolean $BestOfferEnabled
 * @property boolean $LocalListing
 * @property boolean $ThirdPartyCheckoutIntegration
 * @property \DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $SellerContactDetails
 * @property integer $TotalQuestionCount
 * @property boolean $ProxyItem
 * @property \DTS\eBaySDK\MerchantData\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property integer $LeadCount
 * @property integer $NewLeadCount
 * @property \DTS\eBaySDK\MerchantData\Types\NameValueListArrayType $ItemSpecifics
 * @property string $GroupCategoryID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $ClassifiedAdPayPerLeadFee
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DTS\eBaySDK\MerchantData\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $UpdateSellerInfo
 * @property boolean $UpdateReturnPolicy
 * @property \DTS\eBaySDK\MerchantData\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property \DTS\eBaySDK\MerchantData\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property \DTS\eBaySDK\MerchantData\Types\ReturnPolicyType $ReturnPolicy
 * @property \DTS\eBaySDK\MerchantData\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DTS\eBaySDK\MerchantData\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\VariationsType $Variations
 * @property \DTS\eBaySDK\MerchantData\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $ItemCompatibilityCount
 * @property integer $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property \DTS\eBaySDK\MerchantData\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property boolean $PostCheckoutExperienceEnabled
 * @property \DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property boolean $UseRecommendedProduct
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VINLink
 * @property string $VRM
 * @property string $VRMLink
 * @property \DTS\eBaySDK\MerchantData\Types\QuantityInfoType $QuantityInfo
 * @property \DTS\eBaySDK\MerchantData\Types\SellerProfilesType $SellerProfiles
 * @property \DTS\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property \DTS\eBaySDK\MerchantData\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property boolean $TopRatedListing
 * @property \DTS\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $FloorPrice
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $CeilingPrice
 * @property boolean $IsIntermediatedShippingEligible
 * @property \DTS\eBaySDK\MerchantData\Types\UnitInfoType $UnitInfo
 * @property integer $RelistParentID
 * @property string $ConditionDefinition
 * @property boolean $HideFromSearch
 * @property \DTS\eBaySDK\MerchantData\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property boolean $IncludeRecommendations
 * @property \DTS\eBaySDK\MerchantData\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 * @property boolean $LiveAuction
 * @property \DTS\eBaySDK\MerchantData\Types\DigitalGoodInfoType $DigitalGoodInfo
 * @property boolean $eBayPlus
 * @property boolean $eBayPlusEligible
 * @property boolean $eMailDeliveryAvailable
 */
class ItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationData' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationData'
        ],
        'AttributeArray' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AttributeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeArray'
        ],
        'AutoPay' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ],
        'PaymentDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\PaymentDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ],
        'BiddingDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\BiddingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingDetails'
        ],
        'MotorsGermanySearchable' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsGermanySearchable'
        ],
        'BuyerProtection' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerProtection'
        ],
        'BuyItNowPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ],
        'CategoryMappingAllowed' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryMappingAllowed'
        ],
        'Charity' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\CharityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ],
        'Country' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'Currency' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'Description' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'DescriptionReviseMode' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DescriptionReviseMode'
        ],
        'Distance' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DistanceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Distance'
        ],
        'GiftIcon' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GiftIcon'
        ],
        'GiftServices' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'GiftServices'
        ],
        'HitCounter' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCounter'
        ],
        'ItemID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'ListingDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ],
        'ListingDesigner' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingDesignerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDesigner'
        ],
        'ListingDuration' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ],
        'ListingEnhancement' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ListingEnhancement'
        ],
        'ListingType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Location' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ],
        'LotSize' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'PrimaryCategory' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategory'
        ],
        'PrivateListing' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateListing'
        ],
        'ProductListingDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ],
        'Quantity' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'PrivateNotes' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ],
        'RegionID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegionID'
        ],
        'RelistLink' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistLink'
        ],
        'ReservePrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ],
        'ReviseStatus' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReviseStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviseStatus'
        ],
        'ScheduleTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ],
        'SecondaryCategory' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ],
        'FreeAddedCategory' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\CategoryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ],
        'Seller' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'SellingStatus' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'ShippingDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'ShipToLocations' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ],
        'Site' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'StartPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'Storefront' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ],
        'SubTitle' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubTitle'
        ],
        'TimeLeft' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ],
        'Title' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ],
        'UUID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ],
        'VATDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\VATDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
        ],
        'SellerVacationNote' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerVacationNote'
        ],
        'WatchCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ],
        'HitCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ],
        'DisableBuyerRequirements' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisableBuyerRequirements'
        ],
        'BestOfferDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\BestOfferDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ],
        'LocationDefaulted' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocationDefaulted'
        ],
        'ThirdPartyCheckout' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckout'
        ],
        'UseTaxTable' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseTaxTable'
        ],
        'BuyerResponsibleForShipping' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ],
        'eBayNotes' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNotes'
        ],
        'QuestionCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuestionCount'
        ],
        'Relisted' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ],
        'QuantityAvailable' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ],
        'SKU' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'CategoryBasedAttributesPrefill' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryBasedAttributesPrefill'
        ],
        'SearchDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SearchDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchDetails'
        ],
        'PostalCode' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'ShippingTermsInDescription' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsInDescription'
        ],
        'SellerInventoryID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ],
        'PictureDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\PictureDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PictureDetails'
        ],
        'DispatchTimeMax' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DispatchTimeMax'
        ],
        'SkypeEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeEnabled'
        ],
        'SkypeID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ],
        'SkypeContactOption' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SkypeContactOption'
        ],
        'BestOfferEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ],
        'LocalListing' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListing'
        ],
        'ThirdPartyCheckoutIntegration' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckoutIntegration'
        ],
        'ListingCheckoutRedirectPreference' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ],
        'SellerContactDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetails'
        ],
        'TotalQuestionCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalQuestionCount'
        ],
        'ProxyItem' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProxyItem'
        ],
        'ExtendedSellerContactDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExtendedContactDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedSellerContactDetails'
        ],
        'LeadCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ],
        'NewLeadCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewLeadCount'
        ],
        'ItemSpecifics' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ],
        'GroupCategoryID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GroupCategoryID'
        ],
        'ClassifiedAdPayPerLeadFee' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadFee'
        ],
        'ApplyBuyerProtection' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplyBuyerProtection'
        ],
        'ListingSubtype2' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingSubtype2'
        ],
        'MechanicalCheckAccepted' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MechanicalCheckAccepted'
        ],
        'UpdateSellerInfo' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateSellerInfo'
        ],
        'UpdateReturnPolicy' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateReturnPolicy'
        ],
        'ItemPolicyViolation' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemPolicyViolationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemPolicyViolation'
        ],
        'CrossBorderTrade' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CrossBorderTrade'
        ],
        'BusinessSellerDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\BusinessSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ],
        'BuyerGuaranteePrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ],
        'BuyerRequirementDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ],
        'ReturnPolicy' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ReturnPolicyType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ],
        'PaymentAllowedSite' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ],
        'InventoryTrackingMethod' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'Variations' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\VariationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'ItemCompatibilityList' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemCompatibilityListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ],
        'ItemCompatibilityCount' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ],
        'ConditionID' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ],
        'ConditionDescription' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ],
        'ConditionDisplayName' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ],
        'TaxCategory' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
        ],
        'QuantityAvailableHint' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ],
        'QuantityThreshold' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ],
        'PostCheckoutExperienceEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostCheckoutExperienceEnabled'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'UseRecommendedProduct' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseRecommendedProduct'
        ],
        'SellerProvidedTitle' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitle'
        ],
        'VIN' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VIN'
        ],
        'VINLink' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VINLink'
        ],
        'VRM' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRM'
        ],
        'VRMLink' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VRMLink'
        ],
        'QuantityInfo' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\QuantityInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ],
        'SellerProfiles' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\SellerProfilesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ],
        'ShippingServiceCostOverrideList' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ],
        'ShippingPackageDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShipPackageDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ],
        'TopRatedListing' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ],
        'QuantityRestrictionPerBuyer' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ],
        'FloorPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ],
        'CeilingPrice' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CeilingPrice'
        ],
        'IsIntermediatedShippingEligible' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsIntermediatedShippingEligible'
        ],
        'UnitInfo' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\UnitInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ],
        'RelistParentID' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistParentID'
        ],
        'ConditionDefinition' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConditionDefinition'
        ],
        'HideFromSearch' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideFromSearch'
        ],
        'ReasonHideFromSearch' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReasonHideFromSearch'
        ],
        'IncludeRecommendations' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeRecommendations'
        ],
        'PickupInStoreDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\PickupInStoreDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupInStoreDetails'
        ],
        'eBayNowEligible' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ],
        'eBayNowAvailable' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ],
        'IgnoreQuantity' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ],
        'AvailableForPickupDropOff' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ],
        'EligibleForPickupDropOff' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
        ],
        'LiveAuction' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LiveAuction'
        ],
        'DigitalGoodInfo' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\DigitalGoodInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DigitalGoodInfo'
        ],
        'eBayPlus' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPlus'
        ],
        'eBayPlusEligible' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusEligible'
        ],
        'eMailDeliveryAvailable' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eMailDeliveryAvailable'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}